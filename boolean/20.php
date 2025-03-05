<?php
if ($_POST) {
    $a = $_POST['a'];

    if ($a >= 100 && 999 >= $a) {
        $yuz = (int)($a / 100);
        $onlik = (int)(($a - $yuz * 100) / 10);
        $birlik = $a % ($yuz * 100 + $onlik * 10);
        if ($yuz != $onlik && $yuz != $birlik && $birlik != $onlik) {
            echo "Qiymat to'g'ri raqamlari birxil bo'lmagan 3 xonali son";
        } else {
            echo "Berilgan 3 xonali sonni ichida bir xili bo'lga 2 ta raqam bor";
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
    <form action="20.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>