<?php
session_start();
// เชื่อมต่อกับฐานข้อมูล
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_database";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Connection failed: " . $conn->connect_error]));
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // ดึงข้อมูลจากฟอร์ม
    $email = $_POST['email'];
    $password = $_POST['password'];

    // ตรวจสอบว่าข้อมูลถูกส่งมาครบ
    if (empty($email) || empty($password)) {
        echo json_encode(["status" => "error", "message" => "กรุณากรอกข้อมูลให้ครบถ้วน!"]);
        exit();
    }

    // เช็คว่ามี email นี้ในฐานข้อมูลหรือไม่
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        echo json_encode(["status" => "error", "message" => "การเตรียมคำสั่ง SQL ล้มเหลว"]);
        exit();
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // เช็คว่ามีผู้ใช้หรือไม่
    if ($result->num_rows > 0) {
        // ดึงข้อมูลผู้ใช้
        $user = $result->fetch_assoc();

        // เช็ครหัสผ่านว่าถูกต้องหรือไม่ 
        if (password_verify($password, $user['password'])) {
            // เริ่ม session ของตัวเเอง และเก็บ email
            $_SESSION['email'] = $user['email'];

            // ส่งข้อความตอบกลับความสำเร็จ
            echo json_encode(["status" => "success"]);
        } else {
            // กรณีรหัสผ่านไม่ถูกต้อง
            echo json_encode(["status" => "error", "message" => "❌ รหัสผ่านไม่ถูกต้อง! ❌"]);
        }
    } else {
        // กรณีไม่พบผู้ใช้ที่มี email นี้
        echo json_encode(["status" => "error", "message" => "ไม่พบผู้ใช้ที่มีอีเมลนี้กรุณากรอกใหม่"]);
    }

    // ปิดการเชื่อมต่อ
    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["status" => "error", "message" => "การร้องขอไม่ถูกต้อง"]);
}
?>