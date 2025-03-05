<?php
if ($_POST) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    if (($a == (-1 * $b)) || ($c == (-1 * $b)) || ((-1 * $c) == $c)) {
        echo "Qiymatlar to'g'ri  ";
    } else {
        echo "Uchta sondan hech bo‘lmaganda ikkitasi o‘zaro teskari sonlar (masalan, 5 va -5). bo'lish kerak";
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
    <form action="19.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'>
        <input type="number" , placeholder="c" name='c'>
        <button type="submit">ok </button>
    </form>
</body>

</html>