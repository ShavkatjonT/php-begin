<?php
if ($_POST) {
    $a = (int) $_POST['a'];
    $b = (int)$_POST['b'];
    $c = (int) $_POST['c'];
    if (($a == $b && $b != $c) || ($c == $b && $b != $a) || ($a == $c && $c != $b)) {
        if ($a == $b) {
            echo 3 . ' -chi c= ' . $c;
        } else if ($c == $b) {
            echo 1 . ' -chi a= ' . $a;;
        } else if ($a == $c) {
            echo 2 . ' -chi b= ' . $b;
        }
    } else if ($a == $b && $b == $c) {
        echo "Barchasi teng";
    } else {
        echo "har biri xar xil";
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
    <h1>Uchta butun son berilgan, ulardan biri boshqalardan farqli (qolgan ikkitasi teng). Boshqalardan farq qiladigan sonning tartib raqamini aniqlash.</h1>
    <form action="18.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'> <br><br>
        <input type="number" , placeholder="c" name='c'>
        <button type="submit">ok </button>
    </form>
</body>

</html>