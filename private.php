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
    echo json_encode(['message' => 'กรุณาเข้าสู่ระบบก่อน <a href="login.html">คลิกที่นี่</a> เพื่อเข้าสู่ระบบ']);
    exit;
}




// รับอีเมลจาก session
$email = $_SESSION['email'];
// รับข้อมูลจากฟอร์ม
$travel_method = $_POST['travel_method'];
$app_method = $_POST['app_method'];
$train = $_POST['train'];
$train_number = $_POST['train_number'];
$seat_class = $_POST['seat_class'];
$seat_number = $_POST['seat_number'];
$vehicle_plate = $_POST['vehicle_plate'];
$vehicle_color = $_POST['vehicle_color'];
$pickup_dropoff = $_POST['pickup_dropoff'];
$start_time = $_POST['start_time'];
$atmosphere = $_POST['atmosphere'];
$baggage_images = uploadFiles($_FILES['baggage_images']);
$capture_images = uploadFiles($_FILES['capture_images']);
$atmosphere_images = uploadFiles($_FILES['atmosphere_images']);
$ticket_images = uploadFiles($_FILES['ticket_images']);


$sql = "INSERT INTO private_info (email, travel_method, app_method, train, train_number, seat_class, seat_number, vehicle_plate, vehicle_color, pickup_dropoff, start_time, atmosphere, baggage_images, capture_images, atmosphere_images, ticket_images, date) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssssssssss", $email, $travel_method, $app_method, $train, $train_number, $seat_class, $seat_number, $vehicle_plate, $vehicle_color, $pickup_dropoff, $start_time, $atmosphere, $baggage_images, $capture_images, $atmosphere_images, $ticket_images);
//แค่เอาไว้เช็คว่าไม่มีerror
if ($stmt->execute()) {
    echo json_encode(['message' => '🎉 บันทึกการเดินทางสำเร็จ 🎉']);
} else {
    echo json_encode(['message' => 'เกิดข้อผิดพลาดในการบันทึกข้อมูล: ' . $stmt->error]);
}
$stmt->close();
$conn->close();

// ฟังก์ชันสำหรับอัพโหลดไฟล์
function uploadFiles($files)
{
    $uploadedFiles = [];
    foreach ($files['name'] as $key => $name) {
        $targetDir = "uploads/"; // โฟลเดอร์ที่ใช้เก็บไฟล์
        $targetFile = $targetDir . basename($name);
        if (move_uploaded_file($files['tmp_name'][$key], $targetFile)) {
            $uploadedFiles[] = $targetFile;
        }
    }
    return implode(',', $uploadedFiles); // ส่งกลับเป็นสตริงที่แยกด้วยเครื่องหมายจุลภาค
}
?>