<?php
if ($_POST) {

    if ($_POST['a']) {
        $num = $_POST['a'];
        if (100 <= $num && $num <= 999) {
            $yuz = (int)($num / 100);
            $onlik = (int)(($num - $yuz * 100) / 10);
            $birlik = $num % ($yuz * 100 + $onlik * 10);
            $y = $yuz + $onlik * 10 + $birlik * 100;

            echo "o‘ngdan chapga o‘qish almashtirish = " . $y . "<br>";
        } else {
            echo 'Berilgan qiymat 3 honali bo\'lishi kerak';
        }
    } else {
        echo "inputga qiymat kiriting";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="12.php" method="POST">
        <input type="number" , placeholder="uch honali son" name='a'>
        <button type="submit">ok </button>
    </form>





</body>

</html>