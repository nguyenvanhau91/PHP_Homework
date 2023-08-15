<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kết quả học tập</title>
</head>

<body>
    <div class="container">
        <?php
        if (isset($_POST['calculate'])) {
            $hk1 = $_POST['hk1'];
            $hk2 = $_POST['hk2'];
            
            $average = ($hk1 + $hk2) / 2;
            $academicPerformance = '';

            if ($average >= 8.0) {
                $academicPerformance = 'Giỏi';
            } elseif ($average >= 6.5) {
                $academicPerformance = 'Khá';
            } elseif ($average >= 5.0) {
                $academicPerformance = 'Trung bình';
            } else {
                $academicPerformance = 'Yếu';
            }

            $passStatus = ($average >= 5.0) ? 'Được lên lớp' : 'Ở lại lớp';

            echo "<h2>Kết quả học tập:</h2>";
            echo "<p>Điểm HK1: " . $hk1 . "</p>";
            echo "<p>Điểm HK2: " . $hk2 . "</p>";
            echo "<p>Điểm trung bình: " . $average . "</p>";
            echo "<p>Học lực: " . $academicPerformance . "</p>";
            echo "<p>Kết quả: " . $passStatus . "</p>";
        }
        ?>
        <a href="index.html">Quay lại</a>
    </div>
</body>

</html>