<?php
if ($_POST) {
    if ($_POST['a'] && $_POST['b'] && $_POST['c']) {
        $a =  $_POST['a'];
        $b =  $_POST['b'];
        $c =  $_POST['c'];
        if (
            ($a * $a + $b * $b == $c * $c) ||
            ($a * $a + $c * $c == $b * $b) ||
            ($b * $b + $c * $c == $a * $a)
        ) {
            echo "a, b, c tomonlari berilgan uchburchak to‘g‘ri burchakli uchburchak";
        } else {
            echo "hato bu qiymatlar to‘g‘ri burchakli uchburchak emas";
        }
    } else {
        echo "inputlarga qiymat kiriting";
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
    <form action="32.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'>
        <input type="number" , placeholder="c" name='c'>

        <button type="submit">ok </button>
    </form>
</body>

</html>