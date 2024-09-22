<?php
include 'Connection_db.php';

$conn = openConnection(); // Lấy đối tượng kết nối từ Connection_db.php

// Chuẩn bị câu truy vấn và liên kết các tham số
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// Thiết lập các tham số và thực thi
$names = [
    ["John", "Doe", "john@example.com"],
    ["Jane", "Smith", "jane@example.com"],
    ["James", "Johnson", "james@example.com"],
    ["Emily", "Brown", "emily@example.com"],
    ["Michael", "Davis", "michael@example.com"]
];

foreach ($names as $name) {
    list($firstname, $lastname, $email) = $name;
    $stmt->execute();
}

echo "Các bản ghi mới đã được tạo thành công";

$stmt->close();
$conn->close();
?>
