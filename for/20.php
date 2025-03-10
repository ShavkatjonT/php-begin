<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Butun son N (> 0) berilgan. Quyidagi yig‘indini topish:
        1! + 2! + 3! + … + N!
        (Hisoblashlarni haqiqiy o‘zgaruvchi yordamida bajarish va natijani haqiqiy son sifatida chiqarish).
    </h1>
    <form action="20.php" method="POST">
        <input type="number" , placeholder="N" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $a = (int)  $_POST['a'];
    if ($a <= 0) {
        die("N nol dan  katta bo'lsin");
    }
    $b = 0.0;
    for ($i = 1; $i <= $a; $i++) {
        $c = 1.0;
        for ($r = 1; $r <= $i; $r++) {
            $c = $c * $r;
        };
        $b = $b + $c;
    }
    echo "natija " . $b;
}
?>