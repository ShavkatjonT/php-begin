<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun musbat son N (> 0), N = 2ᴷ ko'rinishida berilgan. K butun sonini toping.

    </h1>
    <form action="5.php" method="POST">
        <input type="number" , placeholder="N" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $a = (int)  $_POST['a'];
    if ($a <= 0) {
        die("N ni qiymati musbatson bo'lishi kerak");
    }
    $c = 0;
    while ($a % 2 == 0) {
        $a = $a / 2;
        $c++;
    }

    if ($a != 1) {
        $c = 0;
    }
    echo $c . " ta";
}
?>