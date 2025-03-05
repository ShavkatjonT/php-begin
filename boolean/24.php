<?php
if ($_POST) {
    if ($_POST['a'] && $_POST['b'] && $_POST['c']) {
        $a =  $_POST['a'];
        $b =  $_POST['b'];
        $c =  $_POST['c'];
        if ($a != 0) {
            $d = $b ** 2 - $a * 4 * $c;
            if ($d >= 0) {
                echo "kvadrat tenglama haqiqiy ildizlarga ega";
            } else {
                echo "Bo'sh to'plam";
            }
        } else {
            echo "a ni qiymati 0 ga teng bo'lmasligi kerak";
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
    <form action="24.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'>
        <input type="number" , placeholder="c" name='c'>

        <button type="submit">ok </button>
    </form>
</body>

</html>