<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Butun son N berilgan (N > 0). Quyidagi formuladan foydalangan holda N² ni topish:
        N² = 1 + 3 + 5 + … + (2·N – 1).
    </h1>
    <form action="14.php" method="POST">
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
    $c = 1;
    $b = 0;

    for ($i = 1; $i <= $a; $i++) {
        $b = $b + $c;
        $c += 2;
    }
    echo "natija " . $b;
}
?>