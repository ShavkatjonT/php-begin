<?php
if ($_POST) {

    if ($_POST['a']) {
        $a =  $_POST['a'];

        $b = $a * $a;
        $c = $b * $a;

        $a5 = $b * $c;
        $a10 = $a5 * $a5;
        $a15 = $a10 * $a5;
        echo  'a2= ' . $b;
        echo  'a3= ' . $c;
        echo  'a5= ' . $a5;
        echo  'a10= ' . $a10;
        echo  'a15= ' . $a15;
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
    <h1>Ani darajlari hisoblash</h1>
    <form action="28.php" method="POST">
        <input type="number" , placeholder="A" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>