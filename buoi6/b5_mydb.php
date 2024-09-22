<?php
include 'Connection_db.php';

$conn = openConnection(); // Lấy đối tượng kết nối từ Connection_db.php

// Tạo cơ sở dữ liệu nếu nó chưa tồn tại
$sql = "CREATE DATABASE IF NOT EXISTS b5_mydb";
if ($conn->query($sql) === TRUE) {
    echo "Cơ sở dữ liệu đã được tạo hoặc đã tồn tại.\n";
} else {
    die("Lỗi khi tạo cơ sở dữ liệu: " . $conn->error);
}

// Chọn cơ sở dữ liệu đã tạo hoặc đã có
$conn->select_db("b5_mydb");

// Tạo bảng nếu nó chưa tồn tại
$sql = "CREATE TABLE IF NOT EXISTS MyGuests (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(100),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Bảng 'MyGuests' đã được tạo thành công";
} else {
    echo "Lỗi khi tạo bảng: " . $conn->error;
}

$conn->close(); // Đóng kết nối
?>
