<?php
include 'Connection_db.php';

$conn = openConnection(); // Lấy đối tượng kết nối từ Connection_db.php

// Cập nhật tên
$sql = "UPDATE MyGuests SET firstname='Jane' WHERE firstname='James'";
if ($conn->query($sql) === TRUE) {
    echo "Đổi tên thành công<br>";
} else {
    echo "Lỗi: " . $conn->error . "<br>";
}

// Hiển thị danh sách cập nhật
$sql = "SELECT id, firstname, lastname, reg_date FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>Reg Date</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" 
        . $row["id"] . "</td><td>" 
        . $row["firstname"] . "</td><td>" 
        . $row["lastname"] . "</td><td>" 
        . $row["reg_date"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 kết quả";
}

$conn->close();
?>
