<?php
session_start();
// เปิดการแสดงข้อผิดพลาด
error_reporting(E_ALL);
ini_set('display_errors', 1);
// เชื่อมต่อกับฐานข้อมูล
$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "user_database";

$conn = new mysqli($servername, $username, $password_db, $dbname);

if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}
//สิ่งที่จะเช็ค
$email = $_POST['email'];
$password = $_POST['password'];

// เตรียมและรันคำสั่ง SQL เพื่อตรวจสอบการล็อกอิน
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        $_SESSION['email'] = $user['email'];
        echo "เข้าสู่ระบบสำเร็จ"; // ส่งข้อความล็อกอินสำเร็จกลับไป
    } else {
        echo "<center><p style='color: red; font-weight: bold;'>อีเมลหรือรหัสผ่านไม่ถูกต้อง!</p></center>";
    }
} else {
    echo "</center><p style='color: red; font-weight: bold;'> ไม่พบผู้ใช้งานนี้ กรุณากรอกข้อมูลใหม่ </p></center>";
}

$stmt->close();
$conn->close();
?>