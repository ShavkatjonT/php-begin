<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan haqiqiy son ε (> 0). Quyidagi ketma-ketlik aniqlangan:
        A₁ = 1, A₂ = 2, Aₖ = (Aₖ₋₂ + 2·Aₖ₋₁)/3 (k=3,4,...).
        |Aₖ - Aₖ₋₁| < ε shartini qanoatlantiradigan eng kichik K ni va Aₖ₋₁, Aₖ qiymatlarini toping.
            </h1>
            <form action="29.php" method="POST">
                <input type="text" , placeholder="E" name='a'>
                <button type="submit">ok </button>
            </form>
</body>

</html>
<?php
if ($_POST) {
    $e = (float) $_POST['a'];
    if ($e <= 0) {
        die('E ni qiymati no\'ldan katta bo\'lishi kerak');
    }
    $a = array();
    $a[1] = 1;
    $a[2] = 2;
    $k = 2;

    while (abs($a[$k] - $a[$k - 1]) >= $e) {
        $k++;
        $ak = ($a[$k - 2] + 2 * $a[$k - 1]) / 3;
        $a[$k] = $ak;
    }

    echo "K =  " . $k . '<br>'
        . "A <sub >k-1</sub> = " . $a[$k - 1] . '<br>'
        . "A<sub >k</sub> =  " .  $a[$k];
}
?>