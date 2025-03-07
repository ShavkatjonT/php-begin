<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Uchta butun son koordinatalari berilgan bo‘lib, ular to‘g‘ri to‘rtburchakning uchta cho‘qqisini ifodalaydi (to‘rtburchakning tomonlari koordinata o‘qlariga parallel). Ushbu to‘g‘ri to‘rtburchakning to‘rtinchi cho‘qqisining koordinatalarini aniqlash</h1>
    <form action="23.php" method="POST">
        <input type="number" , placeholder="x" name='x1'>
        <input type="number" , placeholder="y" name='y1'> <span> A </span>
        <br><br>

        <input type="number" , placeholder="x" name='x2'>
        <input type="number" , placeholder="y" name='y2'><span> B </span>
        <br><br>
        <input type="number" , placeholder="x" name='x3'>
        <input type="number" , placeholder="y" name='y3'><span> C </span>
        <br><br>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $x1 = (int)  $_POST['x1'];
    $x2 = (int)  $_POST['x2'];
    $y1 = (int)  $_POST['y1'];
    $y2 = (int)  $_POST['y2'];
    $x3 = (int)  $_POST['x3'];
    $y3 = (int)  $_POST['y3'];

    if ($x1 == $x2) {
        $x4 = $x3;
    } else if ($x1 == $x3) {
        $x4 = $x2;
    } else if ($x3 == $x2) {
        $x4 = $x1;
    } else {
        die("x bu to‘g‘ri to‘rtburchak emas" . "<br>");
    }
    if ($y1 == $y2) {
        $y4 = $y3;
    } else if ($y1 == $y3) {
        $y4 = $y2;
    } else if ($y3 == $y2) {
        $y4 = $y1;
    } else {
        die("y bu to‘g‘ri to‘rtburchak emas");
    }
    if (($x4 <= 0 || $x4 > 0) && ($y4 <= 0 || $y4 > 0)) {
        echo "( " . $x4 .  " , " . $y4 . " )";
    } else {
        echo "qiymatlar hato kitrilgan";
    }
}
?>