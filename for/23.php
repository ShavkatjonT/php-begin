<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan haqiqiy son X va butun son N (> 0). Quyidagi ifodaning qiymatini toping:

        X – X³/(3!) + X⁵/(5!) – … + (–1)ᴺ·X²ᴺ+1/((2·N+1)!)

        (N! = 1·2·…·N). Olingan son sin funksiyasining X nuqtasidagi taxminiy qiymati hisoblanadi.

    </h1>
    <form action="23.php" method="POST">
        <input type="number" , placeholder="X" name='x'>
        <input type="number" , placeholder="N" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $a = (int)  $_POST['a'];
    $x = (int)  $_POST['x'];
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
    echo "natija " . $b;
}
?>