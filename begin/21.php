<?php
if ($_POST) {
    if ($_POST['x1'] && $_POST['x2'] && $_POST['x3'] && $_POST['y1'] && $_POST['y2'] && $_POST['y3']) {
        $x1 =  $_POST['x1'];
        $x2 =  $_POST['x2'];
        $y1 =  $_POST['y1'];
        $y2 =  $_POST['y2'];
        $x3 =  $_POST['x3'];
        $y3 =  $_POST['y3'];
        $a = sqrt(($x2 - $x1) * ($x2 - $x1) + ($y2 - $y1) * ($y2 - $y1));
        $b = sqrt(($x3 - $x1) * ($x3 - $x1) + ($y3 - $y1) * ($y3 - $y1));
        $c = sqrt(($x3 - $x2) * ($x3 - $x2) + ($y3 - $y2) * ($y3 - $y2));
        $p = ($a + $b + $c) / 2;
        $s = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
        echo "natija= " . $s;
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
    <h1>Tekislikda kortinata orasidagi masafoa</h1>
    <form action="21.php" method="POST">
        <input type="number" , placeholder="x1" name='x1'>
        <input type="number" , placeholder="x2" name='x2'>
        <input type="number" , placeholder="x3" name='x3'>
        <br><br>
        <input type="number" , placeholder="y1" name='y1'>
        <input type="number" , placeholder="y2" name='y2'>
        <input type="number" , placeholder="y3" name='y3'>
        <br><br>
        <button type="submit">ok </button>
    </form>
</body>

</html>