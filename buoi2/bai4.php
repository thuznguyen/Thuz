<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thuznguyen - Nhập Mảng</title>
    <link rel="stylesheet" href="bai4.css">
</head>
<body>
    <div class="container">
        <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
        <div class="slide">
            <div class="form-container">
                <h2>Nhập các giá trị cho mảng</h2>
                <!-- Form gửi dữ liệu sang result.php -->
                <form action="bai4trangkq.php" method="POST">
                    <label for="arrayInput">Nhập các phần tử của mảng, cách nhau bởi dấu phẩy:</label><br>
                    <input type="text" id="arrayInput" name="arrayInput" placeholder="Ví dụ: 5, 2, 9, 1, 7, 3" required><br><br>
                    <input type="submit" value="Xử lý mảng">
                </form>
            </div>
        </div>
    </div>
    <footer>
        <a href="https://thuz.w3spaces.com/web.trangcanhan.html"><h2>BACK</h2></a><br>
    </footer>
</body>
</html>
