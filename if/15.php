<?php
if ($_POST) {
    $a = (int) $_POST['a'];
    $b = (int)$_POST['b'];
    $c = (int) $_POST['c'];

    $yig = 0;

    if (($a >= $b && $b >= $c) || $c >= $b && $b >= $a) {
        if ($a > $c) {
            $yig = $a + $b;
        } else {
            $yig = $c + $b;
        }
    } else if (($a <= $b && $a >= $c) || ($b <= $a && $c >= $a)) {
        if ($b > $c) {
            $yig = $b + $a;
        } else {
            $yig = $c + $a;
        }
    } else {
        if ($a > $b) {
            $yig = $a + $c;
        } else {
            $yig = $b + $c;
        }
    }
    echo "natija = " . $yig;
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
    <h1>Uchta son berilgan. Ularning ikkita eng kattasining yig'indisini topish.</h1>
    <form action="14.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'> <br><br>
        <input type="number" , placeholder="c" name='c'>
        <button type="submit">ok </button>
    </form>
</body>

</html>