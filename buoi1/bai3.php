<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thuznguyen</title>
    <link rel="icon" type="image/png" href="https://thuznguyen.000webhostapp.com/baithi/anh/1.3.png">
    <link rel="stylesheet" href="bai3.css">
</head>
<body>
    <div class="container">
        <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
        <?php
        // Hàm tính tổng hai số
        function tinhTong($a, $b) {
            return $a + $b;
        }

        // Hàm tính hiệu hai số
        function tinhHieu($a, $b) {
            return $a - $b;
        }

        // Hàm tính tích hai số
        function tinhTich($a, $b) {
            return $a * $b;
        }

        // Hàm tính thương hai số
        function tinhThuong($a, $b) {
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Không thể chia cho 0";
            } 
        }

        // Hàm kiểm tra số nguyên tố
        function kiemTraNguyenTo($n) {
        if ($n <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
        }

        // Hàm kiểm tra số chẵn
        function kiemTraSoChan($n) {
            return $n % 2 == 0;
        }
        ?>

        <form method="post">
        Số thứ nhất: <input type="number" name="num1" required><br><br>
        Số thứ hai: <input type="number" name="num2" required><br><br>

        <input type="submit" name="operation" value="Tính Tổng">
        <input type="submit" name="operation" value="Tính Hiệu">
        <input type="submit" name="operation" value="Tính Tích">
        <input type="submit" name="operation" value="Tính Thương">
        <input type="submit" name="operation" value="Kiểm tra Nguyên Tố">
        <input type="submit" name="operation" value="Kiểm tra Số Chẵn">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];

        switch ($operation) {
            case "Tính Tổng":
                $result = tinhTong($num1, $num2);
                echo "Kết quả của $num1 + $num2 là: $result";
                break;
            case "Tính Hiệu":
                $result = tinhHieu($num1, $num2);
                echo "Kết quả của $num1 - $num2 là: $result";
                break;
            case "Tính Tích":
                $result = tinhTich($num1, $num2);
                echo "Kết quả của $num1 * $num2 là: $result";
                break;
            case "Tính Thương":
                $result = tinhThuong($num1, $num2);
                echo "Kết quả của $num1 / $num2 là: $result";
                break;
            case "Kiểm tra Nguyên Tố":
                $isPrime1 = kiemTraNguyenTo($num1);
                $isPrime2 = kiemTraNguyenTo($num2);
                echo "Số $num1 " . ($isPrime1 ? "là" : "không phải là") . " số nguyên tố.<br>";
                echo "Số $num2 " . ($isPrime2 ? "là" : "không phải là") . " số nguyên tố.";
                break;
            case "Kiểm tra Số Chẵn":
                $isEven1 = kiemTraSoChan($num1);
                $isEven2 = kiemTraSoChan($num2);
                echo "Số $num1 " . ($isEven1 ? "là" : "không phải là") . " số chẵn.<br>";
                echo "Số $num2 " . ($isEven2 ? "là" : "không phải là") . " số chẵn.";
                break;
            }
        }
        ?>
        </div>
</body>
</html>
