<?php
if ($_POST) {
    $a = $_POST['a'];

    if ($a >= 100 && 999 >= $a) {
        $yuz = (int)($a / 100);
        $onlik = (int)(($a - $yuz * 100) / 10);
        $birlik = $a % ($yuz * 100 + $onlik * 10);
        if (($yuz < $onlik &&  $birlik > $onlik) || ($yuz > $onlik &&  $birlik < $onlik)) {
            if ($yuz < $onlik &&  $birlik > $onlik) {
                echo "Qiymat to'g'ri berilgan 3 xonali sonni raqamlari o‘sish tartibida joylashgan.";
            } else {
                echo "Qiymat to'g'ri berilgan 3 xonali sonni raqamlari  kamayish tartibida joylashgan.";
            }
        } else {
            echo "Berilgan 3 xonali sonni raqamlari o‘sish yoki kamayish tartibida  joylashmagan .";
        }
    } else {
        echo "Berilgan son toq va 3 xonali. bo'lishi kerak";
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
    <form action="22.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>