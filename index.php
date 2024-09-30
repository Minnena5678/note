<?php
// หน้าสมัครใช้งาน 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_database";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("เชื่อมต่อไม่สำเร็จ: " . $conn->connect_error);
}

// ตรวจสอบว่าฟอร์มถูกส่งมาหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับข้อมูลจากฟอร์ม พร้อมการตรวจสอบค่าที่ส่งมา
    $first_name = isset($_POST['first_name']) ? trim($_POST['first_name']) : null;
    $last_name = isset($_POST['last_name']) ? trim($_POST['last_name']) : null;
    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $password_input = isset($_POST['password']) ? $_POST['password'] : null;

    // ตรวจสอบว่าข้อมูลถูกกรอกครบหรือไม่
    if ($first_name && $last_name && $email && $password_input) {
        // แฮชรหัสผ่าน
        $password = password_hash($password_input, PASSWORD_DEFAULT);

        // ตรวจสอบว่ามีข้อมูลที่ตรงกันในฐานข้อมูลหรือไม่
        $sql_check = "SELECT * FROM users WHERE email='$email' OR (first_name='$first_name' AND last_name='$last_name')";
        $result_check = $conn->query($sql_check);

        if ($result_check->num_rows > 0) {
            echo "<center><p style='color: red; font-weight: bold;'>" . htmlspecialchars("อีเมลหรือชื่อ-นามสกุลนี้ถูกใช้ไปแล้ว") . "</p></center>";
        } else {
            // เพิ่มข้อมูลลงในฐานข้อมูล
            $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";

            if ($conn->query($sql) === TRUE) {
                echo "<center><p style='color: green; font-weight: bold;'>สมัครใช้งานบัญชีสำเร็จ!</p></center>";
            } else {
                echo "<center><p style='color: red; font-weight: bold;'>ข้อผิดพลาด: " . htmlspecialchars($sql) . "<br>" . htmlspecialchars($conn->error) . "</p></center>";
            }
        }
    } else {
        echo "<center><p style='color: red; font-weight: bold;'>กรุณากรอกข้อมูลให้ครบถ้วน</p></center>";
    }
}

$conn->close();
?>