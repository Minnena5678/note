<?php
session_start();
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_database";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo json_encode(['status' => 'error', 'message' => 'การเชื่อมต่อฐานข้อมูลล้มเหลว: ' . $conn->connect_error]);
    exit();
}

if (!isset($_SESSION['email'])) {
    echo json_encode(['status' => 'error', 'message' => 'กรุณาเข้าสู่ระบบก่อน<a href="login.html">คลิกที่นี่</a>เพื่อเข้าสู่ระบบ'])
    ;
    exit();
}



//รับมาจากฟอร์ม
$email = $_SESSION['email'];
$travel_method = $_POST['travel_method'];
$vehicle_plate = $_POST['vehicle_plate'];
$route_number = $_POST['route_number'];
$driver_name = $_POST['driver_name'];
$driver_id = $_POST['driver_id'];
$pickup_dropoff = $_POST['pickup_dropoff'];
$start_time = $_POST['start_time'];
$atmosphere = $_POST['atmosphere'];
$date = $_POST['date'];

$uploadDir = "uploads/";

$baggage_images_str = uploadFiles($_FILES['baggage_images']);
$driver_card_images_str = uploadFiles($_FILES['driver_card_images']);
$front_back_images_str = uploadFiles($_FILES['front_back_images']);
$ticket_images_str = uploadFiles($_FILES['ticket_images']);
$atmosphere_images_str = uploadFiles($_FILES['atmosphere_images']);

// เพิ่มข้อมูลลงในฐานข้อมูล
$sql = "INSERT INTO public_info (email, travel_method, vehicle_plate, route_number, driver_name, driver_id, pickup_dropoff, start_time, baggage_images, driver_card_images, front_back_images, ticket_images, atmosphere_images, atmosphere, date) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssssssssss", $email, $travel_method, $vehicle_plate, $route_number, $driver_name, $driver_id, $pickup_dropoff, $start_time, $baggage_images_str, $driver_card_images_str, $front_back_images_str, $ticket_images_str, $atmosphere_images_str, $atmosphere, $date);

//แค่เอาไว้เช็คว่าไม่มีerror
if ($stmt->execute()) {
    echo json_encode(['status' => 'success', 'message' => '🎉 บันทึกการเดินทางสำเร็จ 🎉']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'เกิดข้อผิดพลาดในการบันทึกข้อมูล: ' . $conn->error]);
}
$stmt->close();
$conn->close();

// ฟังก์ชันสำหรับอัพโหลดไฟล์เดี่ยว
function uploadFiles($files)
{
    $uploadedFiles = [];
    foreach ($files['name'] as $key => $name) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($name);
        if (move_uploaded_file($files['tmp_name'][$key], $targetFile)) {
            $uploadedFiles[] = $targetFile;
        }
    }
    return implode(',', $uploadedFiles); // ส่งกลับเป็นสตริงที่แยกด้วยเครื่องหมายจุลภาค
}
?>