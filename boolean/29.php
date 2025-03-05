<?php
if ($_POST) {
    $a = $_POST['a'];
    $a1 = $_POST['a1'];
    $a2 = $_POST['a1'];
    $b = $_POST['b'];
    $b1 = $_POST['b1'];
    $b2 = $_POST['b2'];
    $y = max($b1, $b2);
    $p = min($b1, $b2);
    $o = min($a1, $a2);
    $ch = max($a1, $a2);

    if ($a >= $o && $a <= $ch && $b >= $p && $b <= $y) {
        echo "to'g'ri Nuqta (x, y) ushbu to‘g‘ri to‘rtburchak ichida joylashgan";
    } else {
        echo "hato Nuqta (x, y) ushbu to‘g‘ri to‘rtburchak ichida joylashmagan";
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
    <form action="29.php" method="POST">
        <input type="number" , placeholder="x" name='a'>
        <input type="number" , placeholder="y" name='b'> <br><br>
        <input type="number" , placeholder="x1" name='a1'>
        <input type="number" , placeholder="y1" name='b1'> <br><br>
        <input type="number" , placeholder="x2" name='a2'>
        <input type="number" , placeholder="y2" name='b2'> <br><br>
        <button type="submit">ok </button>
    </form>
</body>

</html>