<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan haqiqiy son X (|X| < 1) va butun son N (> 0). Quyidagi ifodaning qiymatini toping:

            X + 1·X³/(2·3) + 1·3·X⁵/(2·4·5) + … +

            1·3·…·(2·N–1)·X²ᴺ+1/(2·4·…·(2·N)·(2·N+1)).
            Olingan son arcsin(X) funksiyasining taxminiy qiymati hisoblanadi.
    </h1>
    <form action="27.php" method="POST">
        <input type="string" , placeholder="X" name='x'>
        <input type="number" , placeholder="N" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $a = (int)  $_POST['a'];
    $x = (float)  $_POST['x'];
    if (abs($x) >= 1) {
        die("X ni moduldagi qiymati 1 dan kichik bo'lishi kerak");
    }

    if ($a <= 0) {
        die("N nol dan  katta bo'lsin");
    }
    $b =  0.0;
    for ($i = 1; $i <= $a; $i++) {
        $xv = 1;
        $c = 1.0;
        for ($r = 1; $r <= $i; $r++) {
            $c = $c * (2 * $r - 1);
        };
        $maxjuft = 1;
        for ($r = 1; $r <= $i; $r++) {
            $maxjuft *= (2 * $r);
        }

        $maxtoqval = 2 * $i - 1;
        $maxtoq = 1;
        for ($r = 1; $r <= $maxtoqval; $r++) {
            $maxtoq = $maxtoq * $r;
        }
        $b = $b + (($c * ($x ** (2 * $i + 1))) / ($maxjuft * $maxtoq));
    }
    $b = asin($b);
    echo "natija " . $b;
}
?>