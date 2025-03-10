<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun son N (> 1). Fibonacci ketma-ketligi quyidagicha aniqlangan:

        F₁ = 1, F₂ = 1, Fₖ = Fₖ₋₂ + Fₖ₋₁, K = 3, 4, … .

        F₁, F₂, …, Fₙ elementlarini chiqarish.
    </h1>
    <form action="33.php" method="POST">
        <input type="number" , placeholder="N" name='n'>

        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $n = (int)  $_POST['n'];
    if ($n <= 1) {
        die("N ni qiymati birdan katta bo'lishi kerak");
    }
    $far = [0, 1, 1];
    for ($k = 3; $k <= $n; $k++) {
        $fk = $far[$k - 1] + $far[$k - 2];
        echo "F<sub>" . $k . "</sub> = " . $fk . "<br>";
        array_push($far, $fk);
    }
}
?>