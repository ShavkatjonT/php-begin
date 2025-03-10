<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Butun son N berilgan (N > 0). Quyidagi ko‘paytmani topish:
        1.1 · 1.2 · 1.3 · … (N ta ko‘paytuvchi).
    </h1>
    <form action="12.php" method="POST">
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
    $c = 1.1;
    $b = 1;

    for ($i = 1; $i <= $a; $i++) {
        $b = $b * $c;
        $c = $c + 0.1;
    }
    echo "natija " . $b;
}
?>