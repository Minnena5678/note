<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_database";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (!isset($_SESSION['email'])) {
    echo "กรุณาเข้าสู่ระบบก่อนเพื่อดูข้อมูล <a href='userlogin.html'>คลิกที่นี่</a> เพื่อเข้าสู่ระบบ";
    exit();
}

// ดึงอีเมลของผู้ใช้ที่เข้าสู่ระบบจาก session
$user_email = $_SESSION['email'];

// ดึงข้อมูลจากฐานข้อมูลตามประเภทที่เลือกและอีเมลผู้ใช้
$type = $_GET['type'];
$date = isset($_GET['date']) ? $_GET['date'] : '';
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$itemsPerPage = 10; // จำนวนข้อมูลต่อหน้า
$start = ($page - 1) * $itemsPerPage;

if ($type === 'public') {
    $sql = "SELECT p.*, u.first_name, u.last_name 
            FROM public_info p
            JOIN users u ON p.email = u.email
            WHERE p.email = ?"
        . ($date ? " AND DATE(p.date) = ?" : "")
        . " ORDER BY p.date DESC LIMIT ?, ?";
} else if ($type === 'private') {
    $sql = "SELECT p.*, u.first_name, u.last_name 
            FROM private_info p
            JOIN users u ON p.email = u.email
            WHERE p.email = ?"
        . ($date ? " AND DATE(p.date) = ?" : "")
        . " ORDER BY p.date DESC LIMIT ?, ?";
} else {
    echo "ประเภทข้อมูลไม่ถูกต้อง";
    exit();
}

$stmt = $conn->prepare($sql);
if ($date) {
    $stmt->bind_param("ssii", $user_email, $date, $start, $itemsPerPage);
} else {
    $stmt->bind_param("sii", $user_email, $start, $itemsPerPage);
}
$stmt->execute();
$result = $stmt->get_result();

$htmlOutput = '';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $htmlOutput .= "<div class='row'>";
        $htmlOutput .= "<h2>ข้อมูลการเดินทาง" . ($type === 'public' ? 'โดยสารสาธารณะ' : 'โดยสารส่วนตัว/รถราง') . "</h2>";
        $htmlOutput .= "<p>ชื่อ: " . htmlspecialchars($row["first_name"] . " " . $row["last_name"]) . "</p>";
        $htmlOutput .= "<p>วิธีการเดินทาง: " . htmlspecialchars($row["travel_method"]) . "</p>";

        if (!empty($row["app_method"])) {
            $htmlOutput .= "<p>บริการจากแอพพลิเคชั่น: " . htmlspecialchars($row["app_method"]) . "</p>";
        }
        if (!empty($row["train"])) {
            $htmlOutput .= "<p>ประเภทขบวนรถ: " . htmlspecialchars($row["train"]) . "</p>";
        }
        if (!empty($row["train_number"])) {
            $htmlOutput .= "<p>เลขขบวน: " . htmlspecialchars($row["train_number"]) . "</p>";
        }
        if (!empty($row["seat_class"])) {
            $htmlOutput .= "<p>ประเภทชั้นที่นั่ง: " . htmlspecialchars($row["seat_class"]) . "</p>";
        }
        if (!empty($row["seat_number"])) {
            $htmlOutput .= "<p>หมายเลขที่นั่ง: " . htmlspecialchars($row["seat_number"]) . "</p>";
        }
        if (!empty($row["vehicle_plate"])) {
            $htmlOutput .= "<p>ทะเบียนรถ: " . htmlspecialchars($row["vehicle_plate"]) . "</p>";
        }
        if (!empty($row["vehicle_color"])) {
            $htmlOutput .= "<p>สีรถหรือยี่ห้อ: " . htmlspecialchars($row["vehicle_color"]) . "</p>";
        }

        if (!empty($row["route_number"])) {
            $htmlOutput .= "<p>สายที่/เลขข้างรถ: " . htmlspecialchars($row["route_number"]) . "</p>";
        }
        if (!empty($row["driver_name"])) {
            $htmlOutput .= "<p>ชื่อพนักงานขับรถ: " . htmlspecialchars($row["driver_name"]) . "</p>";
        }
        if (!empty($row["driver_id"])) {
            $htmlOutput .= "<p>รหัสพนักงานขับรถ: " . htmlspecialchars($row["driver_id"]) . "</p>";
        }

        $htmlOutput .= "<p>จุดต้นทาง-จุดปลายทาง: " . htmlspecialchars($row["pickup_dropoff"]) . "</p>";
        $htmlOutput .= "<p>เวลาเริ่มเดินทาง: " . htmlspecialchars($row["start_time"]) . "</p>";
        $htmlOutput .= "<p>บรรยากาศในการเดินทางหรืออื่นๆ: " . htmlspecialchars($row["atmosphere"]) . "</p>";
        $htmlOutput .= "<p>วันที่บันทึก: " . htmlspecialchars($row["date"]) . "</p>";

        $image_fields = [
            'baggage_images' => 'รูปภาพสัมภาระ',
            'capture_images' => 'รูปภาพหน้าจอ',
            'atmosphere_images' => 'รูปภาพบรรยากาศ'
        ];

        foreach ($image_fields as $field => $label) {
            if (!empty($row[$field])) {
                $images = explode(',', $row[$field]);
                $htmlOutput .= "<p>$label:</p><div class='image-gallery'>";
                foreach ($images as $image) {
                    $htmlOutput .= "<img src='$image' onclick='viewImage(this.src)' alt='Image'>";
                }
                $htmlOutput .= "</div>";
            }
        }

        $htmlOutput .= "</div>";
    }
} else {
    $htmlOutput .= "<p>ไม่มีข้อมูลที่บันทึกในการเดินทาง</p>";
}

// นับจำนวนหน้าที่มีข้อมูล
$totalItemsQuery = "SELECT COUNT(*) AS total FROM " . ($type === 'public' ? 'public_info' : 'private_info') . " WHERE email = ?";
$totalItemsStmt = $conn->prepare($totalItemsQuery);
$totalItemsStmt->bind_param("s", $user_email);
$totalItemsStmt->execute();
$totalItemsResult = $totalItemsStmt->get_result();
$totalItemsRow = $totalItemsResult->fetch_assoc();
$totalItems = $totalItemsRow['total'];
$totalPages = ceil($totalItems / $itemsPerPage);

// ส่งผลลัพธ์กลับ
$response = [
    'html' => $htmlOutput,
    'totalPages' => $totalPages
];

header('Content-Type: application/json');
echo json_encode($response);
$conn->close();
?>