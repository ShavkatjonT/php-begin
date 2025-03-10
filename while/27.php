<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun musbat son N (> 1), Fibonacci soni: N = Fᴷ. Ushbu Fibonacci sonining tartib raqami K ni toping.
        <form action="27.php" method="POST">
            <input type="number" , placeholder="N" name='a'>
            <button type="submit">ok </button>
        </form>
</body>

</html>
<?php
if ($_POST) {
    $a = (int)  $_POST['a'];
    if ($a <= 1) {
        die("N ni qiymati 1 dan katta bo'lishi kerak ");
    }

    $f_1 = 1;
    $f_2 = 1;
    $c = 2;
    while ($f_1 < $a) {

        $f_3 = $f_1 + $f_2;
        $f_1 = $f_2;
        $c++;
        $f_2 = $f_3;
    }
    if ($f_1 == $a) {
        $c -= 1;
        echo  ' k = ' . $c . " tartib raqami";
    } else {
        die("ushbu son fibonacci soni emas!");
    }
}
?>