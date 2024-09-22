<?php
include 'Connection_db.php';

$conn = openConnection(); // Lấy đối tượng kết nối từ Connection_db.php

$sql = "SELECT id, firstname, lastname, reg_date FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Tạo bảng để hiển thị kết quả
    echo "<table border='1'>
    <tr>
    <th>Id</th><th>Firstname</th>
    <th>Lastname</th>
    <th>Reg Date</th>
    </tr>";
    // Lặp qua từng bản ghi và in ra bảng
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["reg_date"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 kết quả";
}
$conn->close();
?>
