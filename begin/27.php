<?php
if ($_POST) {

    if ($_POST['a']) {
        $a =  $_POST['a'];
        $a2 = $a * $a;
        $a4 = $a2 * $a2;
        $a8 = $a4 * $a4;
        echo  'a2= ' . $a2;
        echo  'a4= ' . $a4;
        echo  'a8= ' . $a8;
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
    <form action="27.php" method="POST">
        <input type="number" , placeholder="A" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>