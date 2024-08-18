<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thuznguyen</title>
    <link rel="icon" type="image/png" href="https://thuznguyen.000webhostapp.com/baithi/anh/1.3.png">
    <link rel="stylesheet" href="bai4.css">
</head>
<body>
    <div class="container">
        <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
        <div class="slide">
            <div class="form-container">
                <h2>Nhập các giá trị cho mảng</h2>
                <form method="POST">
                    <label for="arrayInput">Nhập các phần tử của mảng, cách nhau bởi dấu phẩy:</label><br>
                    <input type="text" id="arrayInput" name="arrayInput" placeholder="Ví dụ: 5, 2, 9, 1, 7, 3"><br><br>
                    <input type="submit" value="Xử lý mảng">
                </form>
            </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy giá trị người dùng nhập và tách thành mảng
        $input = $_POST['arrayInput'];
        $array = explode(',', str_replace(' ', '', $input)); // Xóa khoảng trắng và tách các phần tử

        // Chuyển các phần tử về kiểu số
        $array = array_map('intval', $array);

        // Lưu trữ mảng ban đầu
        $original_array = $array;

        // Tìm giá trị lớn nhất và nhỏ nhất trong mảng
        $max_value = max($array);
        $min_value = min($array);

        // Tính tổng các phần tử trong mảng
        $sum = array_sum($array);

        // Kiểm tra xem số 7 có trong mảng hay không
        $check_value = 7;
        $is_in_array = in_array($check_value, $array) ? "$check_value có trong mảng" : "$check_value không có trong mảng";

        // Sắp xếp mảng theo thứ tự tăng dần
        sort($array);
        ?>

        <div class="result">
            <h2>Kết quả</h2>
            <p><strong>Mảng ban đầu:</strong> <?php echo implode(', ', $original_array); ?></p>
            <p><strong>Giá trị lớn nhất trong mảng:</strong> <?php echo $max_value; ?></p>
            <p><strong>Giá trị nhỏ nhất trong mảng:</strong> <?php echo $min_value; ?></p>
            <p><strong>Tổng các phần tử trong mảng:</strong> <?php echo $sum; ?></p>
            <p><strong>Mảng sau khi sắp xếp:</strong> <?php echo implode(', ', $array); ?></p>
            <p><strong><?php echo $is_in_array; ?></strong></p>
        </div>
        
        <?php 
        } 
        ?>
        
        </div>
    </div>
</body>
</html>