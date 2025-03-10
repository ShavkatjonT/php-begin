<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun son N (> 1). Quyidagi rekursiv ketma-ketlik berilgan:

        A₁ = 1, A₂ = 2, Aₖ = (Aₖ₋₂ + 2·Aₖ₋₁)/3, K = 3, 4, … .

        A₁, A₂, …, Aₙ elementlarini chiqarish.
    </h1>
    <form action="34.php" method="POST">
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
    $ar = [0, 1, 2];
    echo "A<sub>" . 1 . "</sub> = " . 1 . "<br>";
    echo "A<sub>" . 2 . "</sub> = " . 2 . "<br>";
    for ($k = 3; $k <= $n; $k++) {
        $ak = $ar[$k - 2] + 2 * $ar[$k - 1] / 3;
        echo "A<sub>" . $k . "</sub> = " . $ak . "<br>";
        array_push($ar, $ak);
    }
}
?>