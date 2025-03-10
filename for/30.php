<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun son N (> 1) va haqiqiy sonlar A, B (A < B). [A, B] kesmasi N ta teng bo‘lakka bo‘lingan. Quyidagilarni chiqarish:

            H — har bir bo‘lak uzunligi va F(X)=1 – sin(X) funksiyasining quyidagi nuqtalardagi qiymatlari:

            F(A), F(A + H), F(A + 2·H), …, F(B).
            </h1>
            <form action="30.php" method="POST">
                <input type="number" , placeholder="A" name='a'>
                <input type="number" , placeholder="B" name='b'>
                <input type="number" , placeholder="N" name='n'>
                <button type="submit">ok </button>
            </form>
</body>

</html>

<?php
if ($_POST) {
    $a = (int)  $_POST['a'];
    $b = (int)  $_POST['b'];
    $n = (int)  $_POST['n'];

    if ($a >= $b) {
        die("A ni qiymati B dan kichik bo'lishi kerak");
    }
    if ($n <= 1) {
        die("N ni qoymati 1 dan katta bo'lishi kerak");
    }
    $h = ($b - $a) / $n;

    function fsin($arg)
    {
        return 1 - sin($arg);
    }

    for ($i = 0; $i <= $n; $i++) {
        $c = fsin($a + $h * $i);
        echo $c . " , <br>";
    }
}
?>