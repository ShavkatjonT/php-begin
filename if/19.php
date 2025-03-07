<?php
if ($_POST) {
    $a = (int) $_POST['a'];
    $b = (int)$_POST['b'];
    $c = (int) $_POST['c'];
    $d = (int) $_POST['d'];
    if ($a == $b && $b == $c && $c == $d) {
        echo "barchasi teng";
    } else {
        if (($a == $b && $b == $c) || ($a == $b && $b == $d) || ($a == $c && $d == $c)) {
            if ($a == $b && $b == $c) {
                echo 4 . ' -chi d= ' . $d;
            } else if ($a == $b && $b == $d) {
                echo 3 . ' -chi c= ' . $c;
            } else if ($a == $c && $d == $c) {
                echo 2 . ' -chi b= ' . $b;
            } else {
                echo 1 . ' -chi b= ' . $a;
            }
        } else {
            echo "har 3 tasi bir xil bo'lgan qiymat topilmadi";
        }
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
    <h1>To‘rtta butun son berilgan, ulardan biri boshqalardan farqli (qolgan uchtasi teng). Boshqalardan farq qiladigan sonning tartib raqamini aniqlash.</h1>
    <form action="19.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'> <br><br>
        <input type="number" , placeholder="c" name='c'>
        <input type="number" , placeholder="d" name='d'> <br><br>
        <button type="submit">ok </button>
    </form>
</body>

</html>