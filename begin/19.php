<?php
if ($_POST) {
    if ($_POST['a'] && $_POST['b'] && $_POST['c'] && $_POST['d']) {
        $a =  $_POST['a'];
        $b =  $_POST['b'];
        $c =  $_POST['c'];
        $d =  $_POST['d'];
        $ba = $c - $d;
        $en = $a - $b;
        $p = 2 * ($ba + $en);
        echo $p;
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
    <h1>To'rg'ri to'rtburchak</h1>
    <form action="19.php" method="POST">
        <input type="number" , placeholder="x1" name='a'>
        <input type="number" , placeholder="x2" name='b'><br><br>
        <input type="number" , placeholder="y1" name='c'>
        <input type="number" , placeholder="y2" name='d'>

        <button type="submit">ok </button>
    </form>
</body>

</html>