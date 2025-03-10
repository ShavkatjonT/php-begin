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

            1 + X/2 – 1·X²/(2·4) + 1·3·X³/(2·4·6) – … +

            (–1)ᴺ–1·1·3·…·(2·N–3)·Xᴺ/(2·4·…·(2·N)).
            Olingan son √(1 + X) funksiyasining taxminiy qiymati hisoblanadi.
    </h1>
    <form action="28.php" method="POST">
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
            $c = $c * (2 * $r - 3);
        };
        $maxjuft = 1;
        for ($r = 1; $r <= $i; $r++) {
            $maxjuft *= (2 * $r);
        }


        $b = $b + (((-1 ** $i - 1) * $c * ($x ** $i)) / $maxjuft);
    }
    $b = sqrt(1 + $b);
    echo "natija " . $b;
}
?>