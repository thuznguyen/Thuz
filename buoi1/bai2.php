<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thuznguyen</title>
    <link rel="icon" type="image/png" href="https://thuznguyen.000webhostapp.com/baithi/anh/1.3.png" alt="Image" width="40px" height="40px">
    <link rel="stylesheet" href="bai2.css">
</head>
<body>
    <div id="hienthithongtin">
        <h2>HIỂN THỊ THÔNG TIN</h2><br>

        <div class="slideshow-container">
            <!-- Slide 1 -->
            <div class="slide">
                <?php
                $data1 = [
                    ["STT" => "1", "Tên sách" => "Tên sách 1", "Nội dung sách" => "Nội dung 1"],
                    ["STT" => "2", "Tên sách" => "Tên sách 2", "Nội dung sách" => "Nội dung 2"],
                    ["STT" => "3", "Tên sách" => "Tên sách 3", "Nội dung sách" => "Nội dung 3"],
                    ["STT" => "4", "Tên sách" => "Tên sách 4", "Nội dung sách" => "Nội dung 4"],
                    ["STT" => "5", "Tên sách" => "Tên sách 5", "Nội dung sách" => "Nội dung 5"],
                    ["STT" => "6", "Tên sách" => "Tên sách 6", "Nội dung sách" => "Nội dung 6"],
                    ["STT" => "7", "Tên sách" => "Tên sách 7", "Nội dung sách" => "Nội dung 7"],
                    ["STT" => "8", "Tên sách" => "Tên sách 8", "Nội dung sách" => "Nội dung 8"],
                    ["STT" => "9", "Tên sách" => "Tên sách 9", "Nội dung sách" => "Nội dung 9"],
                    ["STT" => "10", "Tên sách" => "Tên sách 10", "Nội dung sách" => "Nội dung 10"]
                ];

                echo "<table class='center-table'>";
                echo "<tr><th>STT</th><th>Tên sách</th><th>Nội dung sách</th></tr>";

                foreach ($data1 as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['STT'] . "</td>";
                    echo "<td>" . $row['Tên sách'] . "</td>";
                    echo "<td>" . $row['Nội dung sách'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>

            <!-- Slide 2 -->
            <div class="slide">
                <?php
                $data1 = [
                    ["STT" => "11", "Tên sách" => "Tên sách 11", "Nội dung sách" => "Nội dung 11"],
                    ["STT" => "12", "Tên sách" => "Tên sách 12", "Nội dung sách" => "Nội dung 12"],
                    ["STT" => "13", "Tên sách" => "Tên sách 13", "Nội dung sách" => "Nội dung 13"],
                    ["STT" => "14", "Tên sách" => "Tên sách 14", "Nội dung sách" => "Nội dung 14"],
                    ["STT" => "15", "Tên sách" => "Tên sách 15", "Nội dung sách" => "Nội dung 15"],
                    ["STT" => "16", "Tên sách" => "Tên sách 16", "Nội dung sách" => "Nội dung 16"],
                    ["STT" => "17", "Tên sách" => "Tên sách 17", "Nội dung sách" => "Nội dung 17"],
                    ["STT" => "18", "Tên sách" => "Tên sách 18", "Nội dung sách" => "Nội dung 18"],
                    ["STT" => "19", "Tên sách" => "Tên sách 19", "Nội dung sách" => "Nội dung 19"],
                    ["STT" => "20", "Tên sách" => "Tên sách 20", "Nội dung sách" => "Nội dung 20"]
                ];

                echo "<table class='center-table'>";
                echo "<tr><th>STT</th><th>Tên sách</th><th>Nội dung sách</th></tr>";

                foreach ($data1 as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['STT'] . "</td>";
                    echo "<td>" . $row['Tên sách'] . "</td>";
                    echo "<td>" . $row['Nội dung sách'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>


             <!-- Slide 3 -->
             <div class="slide">
                <?php
                $data1 = [
                    ["STT" => "21", "Tên sách" => "Tên sách 21", "Nội dung sách" => "Nội dung 21"],
                    ["STT" => "22", "Tên sách" => "Tên sách 22", "Nội dung sách" => "Nội dung 22"],
                    ["STT" => "23", "Tên sách" => "Tên sách 23", "Nội dung sách" => "Nội dung 23"],
                    ["STT" => "24", "Tên sách" => "Tên sách 24", "Nội dung sách" => "Nội dung 24"],
                    ["STT" => "25", "Tên sách" => "Tên sách 25", "Nội dung sách" => "Nội dung 25"],
                    ["STT" => "26", "Tên sách" => "Tên sách 26", "Nội dung sách" => "Nội dung 26"],
                    ["STT" => "27", "Tên sách" => "Tên sách 27", "Nội dung sách" => "Nội dung 27"],
                    ["STT" => "28", "Tên sách" => "Tên sách 28", "Nội dung sách" => "Nội dung 28"],
                    ["STT" => "29", "Tên sách" => "Tên sách 29", "Nội dung sách" => "Nội dung 29"],
                    ["STT" => "30", "Tên sách" => "Tên sách 30", "Nội dung sách" => "Nội dung 30"]
                ];

                echo "<table class='center-table'>";
                echo "<tr><th>STT</th><th>Tên sách</th><th>Nội dung sách</th></tr>";

                foreach ($data1 as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['STT'] . "</td>";
                    echo "<td>" . $row['Tên sách'] . "</td>";
                    echo "<td>" . $row['Nội dung sách'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>

           <!-- Slide 4 -->
           <div class="slide">
                <?php
                $data1 = [
                    ["STT" => "31", "Tên sách" => "Tên sách 31", "Nội dung sách" => "Nội dung 31"],
                    ["STT" => "32", "Tên sách" => "Tên sách 32", "Nội dung sách" => "Nội dung 32"],
                    ["STT" => "33", "Tên sách" => "Tên sách 33", "Nội dung sách" => "Nội dung 33"],
                    ["STT" => "34", "Tên sách" => "Tên sách 34", "Nội dung sách" => "Nội dung 34"],
                    ["STT" => "35", "Tên sách" => "Tên sách 35", "Nội dung sách" => "Nội dung 35"],
                    ["STT" => "36", "Tên sách" => "Tên sách 36", "Nội dung sách" => "Nội dung 36"],
                    ["STT" => "37", "Tên sách" => "Tên sách 37", "Nội dung sách" => "Nội dung 37"],
                    ["STT" => "38", "Tên sách" => "Tên sách 38", "Nội dung sách" => "Nội dung 38"],
                    ["STT" => "39", "Tên sách" => "Tên sách 39", "Nội dung sách" => "Nội dung 39"],
                    ["STT" => "40", "Tên sách" => "Tên sách 40", "Nội dung sách" => "Nội dung 40"]
                ];

                echo "<table class='center-table'>";
                echo "<tr><th>STT</th><th>Tên sách</th><th>Nội dung sách</th></tr>";

                foreach ($data1 as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['STT'] . "</td>";
                    echo "<td>" . $row['Tên sách'] . "</td>";
                    echo "<td>" . $row['Nội dung sách'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>

            <!-- Slide 5 -->
            <div class="slide">
                <?php
                $data1 = [
                    ["STT" => "41", "Tên sách" => "Tên sách 41", "Nội dung sách" => "Nội dung 41"],
                    ["STT" => "42", "Tên sách" => "Tên sách 42", "Nội dung sách" => "Nội dung 42"],
                    ["STT" => "43", "Tên sách" => "Tên sách 43", "Nội dung sách" => "Nội dung 43"],
                    ["STT" => "44", "Tên sách" => "Tên sách 44", "Nội dung sách" => "Nội dung 44"],
                    ["STT" => "45", "Tên sách" => "Tên sách 45", "Nội dung sách" => "Nội dung 45"],
                    ["STT" => "46", "Tên sách" => "Tên sách 46", "Nội dung sách" => "Nội dung 46"],
                    ["STT" => "47", "Tên sách" => "Tên sách 47", "Nội dung sách" => "Nội dung 47"],
                    ["STT" => "48", "Tên sách" => "Tên sách 48", "Nội dung sách" => "Nội dung 48"],
                    ["STT" => "49", "Tên sách" => "Tên sách 49", "Nội dung sách" => "Nội dung 49"],
                    ["STT" => "50", "Tên sách" => "Tên sách 50", "Nội dung sách" => "Nội dung 50"]
                ];

                echo "<table class='center-table'>";
                echo "<tr><th>STT</th><th>Tên sách</th><th>Nội dung sách</th></tr>";

                foreach ($data1 as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['STT'] . "</td>";
                    echo "<td>" . $row['Tên sách'] . "</td>";
                    echo "<td>" . $row['Nội dung sách'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>


            <!-- Slide 6 -->
            <<div class="slide">
                <?php
                $data1 = [
                    ["STT" => "51", "Tên sách" => "Tên sách 51", "Nội dung sách" => "Nội dung 51"],
                    ["STT" => "52", "Tên sách" => "Tên sách 52", "Nội dung sách" => "Nội dung 52"],
                    ["STT" => "53", "Tên sách" => "Tên sách 53", "Nội dung sách" => "Nội dung 53"],
                    ["STT" => "54", "Tên sách" => "Tên sách 54", "Nội dung sách" => "Nội dung 54"],
                    ["STT" => "55", "Tên sách" => "Tên sách 55", "Nội dung sách" => "Nội dung 55"],
                    ["STT" => "56", "Tên sách" => "Tên sách 56", "Nội dung sách" => "Nội dung 56"],
                    ["STT" => "57", "Tên sách" => "Tên sách 57", "Nội dung sách" => "Nội dung 57"],
                    ["STT" => "58", "Tên sách" => "Tên sách 58", "Nội dung sách" => "Nội dung 58"],
                    ["STT" => "59", "Tên sách" => "Tên sách 59", "Nội dung sách" => "Nội dung 59"],
                    ["STT" => "60", "Tên sách" => "Tên sách 60", "Nội dung sách" => "Nội dung 60"]
                ];

                echo "<table class='center-table'>";
                echo "<tr><th>STT</th><th>Tên sách</th><th>Nội dung sách</th></tr>";

                foreach ($data1 as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['STT'] . "</td>";
                    echo "<td>" . $row['Tên sách'] . "</td>";
                    echo "<td>" . $row['Nội dung sách'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>

            <!-- Slide 7 -->
            <<div class="slide">
                <?php
                $data1 = [
                    ["STT" => "61", "Tên sách" => "Tên sách 61", "Nội dung sách" => "Nội dung 61"],
                    ["STT" => "62", "Tên sách" => "Tên sách 62", "Nội dung sách" => "Nội dung 62"],
                    ["STT" => "63", "Tên sách" => "Tên sách 63", "Nội dung sách" => "Nội dung 63"],
                    ["STT" => "64", "Tên sách" => "Tên sách 64", "Nội dung sách" => "Nội dung 64"],
                    ["STT" => "65", "Tên sách" => "Tên sách 65", "Nội dung sách" => "Nội dung 65"],
                    ["STT" => "66", "Tên sách" => "Tên sách 66", "Nội dung sách" => "Nội dung 66"],
                    ["STT" => "67", "Tên sách" => "Tên sách 67", "Nội dung sách" => "Nội dung 67"],
                    ["STT" => "68", "Tên sách" => "Tên sách 68", "Nội dung sách" => "Nội dung 68"],
                    ["STT" => "69", "Tên sách" => "Tên sách 69", "Nội dung sách" => "Nội dung 69"],
                    ["STT" => "70", "Tên sách" => "Tên sách 70", "Nội dung sách" => "Nội dung 70"]
                ];

                echo "<table class='center-table'>";
                echo "<tr><th>STT</th><th>Tên sách</th><th>Nội dung sách</th></tr>";

                foreach ($data1 as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['STT'] . "</td>";
                    echo "<td>" . $row['Tên sách'] . "</td>";
                    echo "<td>" . $row['Nội dung sách'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>

            <!-- Slide 8 -->
            <div class="slide">
                <?php
                $data1 = [
                    ["STT" => "71", "Tên sách" => "Tên sách 71", "Nội dung sách" => "Nội dung 71"],
                    ["STT" => "72", "Tên sách" => "Tên sách 72", "Nội dung sách" => "Nội dung 72"],
                    ["STT" => "73", "Tên sách" => "Tên sách 73", "Nội dung sách" => "Nội dung 73"],
                    ["STT" => "74", "Tên sách" => "Tên sách 74", "Nội dung sách" => "Nội dung 74"],
                    ["STT" => "75", "Tên sách" => "Tên sách 75", "Nội dung sách" => "Nội dung 75"],
                    ["STT" => "76", "Tên sách" => "Tên sách 76", "Nội dung sách" => "Nội dung 76"],
                    ["STT" => "77", "Tên sách" => "Tên sách 77", "Nội dung sách" => "Nội dung 77"],
                    ["STT" => "78", "Tên sách" => "Tên sách 78", "Nội dung sách" => "Nội dung 78"],
                    ["STT" => "79", "Tên sách" => "Tên sách 79", "Nội dung sách" => "Nội dung 79"],
                    ["STT" => "80", "Tên sách" => "Tên sách 80", "Nội dung sách" => "Nội dung 80"]
                ];

                echo "<table class='center-table'>";
                echo "<tr><th>STT</th><th>Tên sách</th><th>Nội dung sách</th></tr>";

                foreach ($data1 as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['STT'] . "</td>";
                    echo "<td>" . $row['Tên sách'] . "</td>";
                    echo "<td>" . $row['Nội dung sách'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>

            <!-- Slide 9 -->
            <div class="slide">
                <?php
                $data1 = [
                    ["STT" => "81", "Tên sách" => "Tên sách 81", "Nội dung sách" => "Nội dung 81"],
                    ["STT" => "82", "Tên sách" => "Tên sách 82", "Nội dung sách" => "Nội dung 82"],
                    ["STT" => "83", "Tên sách" => "Tên sách 83", "Nội dung sách" => "Nội dung 83"],
                    ["STT" => "84", "Tên sách" => "Tên sách 84", "Nội dung sách" => "Nội dung 84"],
                    ["STT" => "85", "Tên sách" => "Tên sách 85", "Nội dung sách" => "Nội dung 85"],
                    ["STT" => "86", "Tên sách" => "Tên sách 86", "Nội dung sách" => "Nội dung 86"],
                    ["STT" => "87", "Tên sách" => "Tên sách 87", "Nội dung sách" => "Nội dung 87"],
                    ["STT" => "88", "Tên sách" => "Tên sách 88", "Nội dung sách" => "Nội dung 88"],
                    ["STT" => "89", "Tên sách" => "Tên sách 89", "Nội dung sách" => "Nội dung 89"],
                    ["STT" => "90", "Tên sách" => "Tên sách 90", "Nội dung sách" => "Nội dung 90"]
                ];

                echo "<table class='center-table'>";
                echo "<tr><th>STT</th><th>Tên sách</th><th>Nội dung sách</th></tr>";

                foreach ($data1 as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['STT'] . "</td>";
                    echo "<td>" . $row['Tên sách'] . "</td>";
                    echo "<td>" . $row['Nội dung sách'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>

            <!-- Slide 10 -->
            <div class="slide">
                <?php
                $data1 = [
                    ["STT" => "91", "Tên sách" => "Tên sách 91", "Nội dung sách" => "Nội dung 91"],
                    ["STT" => "92", "Tên sách" => "Tên sách 92", "Nội dung sách" => "Nội dung 92"],
                    ["STT" => "93", "Tên sách" => "Tên sách 93", "Nội dung sách" => "Nội dung 93"],
                    ["STT" => "94", "Tên sách" => "Tên sách 94", "Nội dung sách" => "Nội dung 94"],
                    ["STT" => "95", "Tên sách" => "Tên sách 95", "Nội dung sách" => "Nội dung 95"],
                    ["STT" => "96", "Tên sách" => "Tên sách 96", "Nội dung sách" => "Nội dung 96"],
                    ["STT" => "97", "Tên sách" => "Tên sách 97", "Nội dung sách" => "Nội dung 97"],
                    ["STT" => "98", "Tên sách" => "Tên sách 98", "Nội dung sách" => "Nội dung 98"],
                    ["STT" => "99", "Tên sách" => "Tên sách 99", "Nội dung sách" => "Nội dung 99"],
                    ["STT" => "100", "Tên sách" => "Tên sách 100", "Nội dung sách" => "Nội dung 100"]
                ];

                echo "<table class='center-table'>";
                echo "<tr><th>STT</th><th>Tên sách</th><th>Nội dung sách</th></tr>";

                foreach ($data1 as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['STT'] . "</td>";
                    echo "<td>" . $row['Tên sách'] . "</td>";
                    echo "<td>" . $row['Nội dung sách'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>


            <!-- Nút điều hướng -->
            <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
            <a class="next" onclick="changeSlide(1)">&#10095;</a>
        </div>
    </div>

    <script src="bai2.js"></script>
</body>
</html>
