<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan musbat sonlar A, B, C. O'lchami A × B bo'lgan to'g'ri to'rtburchakka tomoni C ga teng bo'lgan maksimal kvadratlar joylashtirilgan. Ko'paytirish va bo'lish amallarini ishlatmasdan, joylashgan kvadratlar sonini toping.
    </h1>
    <form action="30.php" method="POST">
        <input type="text" , placeholder="A" name='a'>
        <input type="text" , placeholder="B" name='b'>
        <input type="text" , placeholder="C" name='c'>
        <button type="submit">ok </button>
    </form>
</body>

</html>
<?php
if ($_POST) {
    $a = (float) $_POST['a'];
    $b = (float) $_POST['b'];
    $c = (float) $_POST['c'];
    if ($a <= 0 || $b <= 0 || $c <= 0) {
        die('A, B, C ni qiymati no\'ldan katta bo\'lishi kerak');
    }


    $d = 0;
    while ($a >= $c) {
        $rd = 0;
        $br = $b;
        while ($br >= $c) {
            $rd++;
            $br -= $c;
        }
        $d += $rd;
        $a -= $c;
    }


    echo $d;
}
?>