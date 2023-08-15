<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php 
        if (isset($_POST['calculate'])) {
            $width = $_POST['width'];
            $height = $_POST['height'];
            $area = $width * $height;

            echo "<h2>Kết quả:</h2>";
            echo "<p>Chiều rộng: " . $width . " </p>";
            echo "<p>Chiều dài: " . $height . " </p>";
            echo "<p>Diện tích hình chữ nhật là: " . $area . " </p>";
        }
        ?>
        <a href="index.html">Quay lại</a>
    </div>
</body>

</html>