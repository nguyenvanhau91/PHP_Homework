<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        Nhập số cần kiểm tra:
        <input type="text" name="number">
        <input type="submit" value="kiểm tra">
    </form>
    <?php
    $number = $_POST['number'];
    if ($number % 2 == 0) {
        echo "Số $number là số chẵn";
    } else {
        echo "Số $number là số lẻ";
    }
    ?>
</body>

</html>