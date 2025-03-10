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

            X – X³/3 + X⁵/5 – … + (–1)ᴺ·X²ᴺ+1/(2·N+1).

            Olingan son arctg(X) funksiyasining taxminiy qiymati hisoblanadi.
    </h1>
    <form action="26.php" method="POST">
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
    $d = 1.0;
    $e = 1;
    for ($i = 1; $i <= $a; $i++) {
        $c = 1.0;
        for ($r = 1; $r <= $e; $r++) {
            $c = $c * $r;
        };
        $b = $b + $d * (($x ** $e) / $c);
        $e += 2;
        $d = $d * -1.0;
    }
    $b = atan($b);
    echo "natija " . $b;
}
?>