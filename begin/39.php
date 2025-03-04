<?php
if ($_POST) {
    if ($_POST['a'] && $_POST['b'] && $_POST['c']) {
        $a =  $_POST['a'];
        $b =  $_POST['b'];
        $c =  $_POST['c'];
        $d = $b ** 2 - $a * 4 * $c;
        if ($d > 0) {
            $x1 = -$b + sqrt($d) / 2 * $a;
            $x2 = -$b - sqrt($d) / 2 * $a;

            echo 'natija x1= ' . $x1 . " <br/>" . "x2= " . $x2;
        } else {
            echo "Diskiminat musmat son bo'lmadi";
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
    <h1>Ax2+Bx+C</h1>
    <form action="39.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'>
        <input type="number" , placeholder="c" name='c'>

        <button type="submit">ok </button>
    </form>
</body>

</html>