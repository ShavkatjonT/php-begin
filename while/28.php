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
        A₁ = 2, Aₖ = 2 + 1/Aₖ₋₁ (k=2,3,...).
        |Aₖ - Aₖ₋₁| < ε shartini qanoatlantiradigan eng kichik K ni va Aₖ₋₁, Aₖ qiymatlarini toping.
            </h1>
            <form action="28.php" method="POST">
                <input type="text" , placeholder="E" name='a'>
                <button type="submit">ok </button>
            </form>
</body>

</html>
<?php
if ($_POST) {
    $a = (float) $_POST['a'];

    if ($a > 0) {
        $r = 2;
        $c = 2 + 1 / $r;
        $k = 1;
        while (abs($c - $r) >= $a) {
            $r = $c;
            $c = 2 + 1 / $r;
            $k = $k + 1;
        }
        echo "K =  " . $k . '<br>'
            . "A <sub >k-1</sub> = " . $r . '<br>'
            . "A<sub >k</sub> =  " . $c;
    } else {
        echo "E soni 0 dan yuqori bo'lishi kerak";
    }
}
?>