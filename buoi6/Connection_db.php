<?php
function openConnection() {
    // Thông tin máy chủ và tài khoản
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $dbname = "b5_mydb";

    // Tạo kết nối đến MySQL
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    return $conn; // Trả về đối tượng kết nối
}
?>
