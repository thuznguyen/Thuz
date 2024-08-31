<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookName = $_POST['bookName'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $year = $_POST['year'];

    // Khởi tạo biến lỗi
    $errors = [];

    // Kiểm tra tên sách
    if (empty($bookName)) {
        $errors[] = "Tên sách không được để trống.";
    }

    // Kiểm tra tác giả
    if (empty($author)) {
        $errors[] = "Tác giả không được để trống.";
    }

    // Kiểm tra nhà xuất bản
    if (empty($publisher)) {
        $errors[] = "Nhà xuất bản không được để trống.";
    }

    // Kiểm tra năm xuất bản
    if (empty($year)) {
        $errors[] = "Năm xuất bản không được để trống.";
    } elseif (!is_numeric($year) || strlen($year) != 4) {
        $errors[] = "Năm xuất bản phải là một số có 4 chữ số.";
    }

    // Nếu không có lỗi, hiển thị dữ liệu
    if (empty($errors)) {
        echo "Tên sách: " . htmlspecialchars($bookName) . "<br>";
        echo "Tác giả: " . htmlspecialchars($author) . "<br>";
        echo "Nhà xuất bản: " . htmlspecialchars($publisher) . "<br>";
        echo "Năm xuất bản: " . htmlspecialchars($year) . "<br>";
    } else {
        // Hiển thị lỗi
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>

</body>
</html>