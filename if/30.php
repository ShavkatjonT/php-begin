<?php
if ($_POST) {

    $a = (int) $_POST['a'];
    if ($a >= 1 && $a <= 9) {
        if ($a % 2) {
            echo 'Toq bir xonali son';
        } else {
            echo 'Juft bir xonali son';
        }
    } else if ($a <= 99 && 10 <= $a) {
        if ($a % 2) {
            echo 'Toq ikki  xonali son';
        } else {
            echo 'Juft ikki  xonali son';
        }
    } else if ($a <= 999 && 100 <= $a) {
        if ($a % 2) {
            echo 'Toq uch  xonali son';
        } else {
            echo 'Juft uch  xonali son';
        }
    } else {
        echo "1 dan 999 gacha bo'lishi kerak qiymat";
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
    <h1>1 dan 999 gacha bo‘lgan butun son berilgan. Ushbu sonning tavsifini chiqarish, masalan:
        "juft ikki xonali son", "toq uch xonali son", va hokazo.</h1>
    <form action="30.php" method="POST">
        <input type="number" , placeholder="son" name='a'>
        <button type="submit">ok </button>
    </form>





</body>

</html>