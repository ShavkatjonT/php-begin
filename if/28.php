<?php
if ($_POST) {

    $a = (int) $_POST['a'];
    if (($a % 4 == 0 && $a % 100 != 0) || ($a % 400 == 0)) {
        echo 366 .  " Kabisa yili";
    } else {
        echo 365 . "  Oddiy yil";
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
    <h1>Yil raqami (musbat butun son) berilgan. Ushbu yil nechta kundan iborat ekanligini aniqlash.

    </h1>
    <form action="28.php" method="POST">
        <input type="number" , placeholder="son" name='a'>
        <button type="submit">ok </button>
    </form>





</body>

</html>