<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun son N (> 2). Quyidagi rekursiv ketma-ketlik berilgan:

        A₁ = 1, A₂ = 2, A₃ = 3, Aₖ = Aₖ₋₁ + Aₖ₋₂ – 2·Aₖ₋₃, K = 4, 5, … .

        A₁, A₂, …, Aₙ elementlarini chiqarish.
    </h1>
    <form action="35.php" method="POST">
        <input type="number" , placeholder="N" name='n'>

        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $n = (int)  $_POST['n'];
    if ($n <= 2) {
        die("N ni qiymati ikki dan katta bo'lishi kerak");
    }
    $ar = [0, 1, 2, 3];
    echo "A<sub>" . 1 . "</sub> = " . 1 . "<br>";
    echo "A<sub>" . 2 . "</sub> = " . 2 . "<br>";
    echo "A<sub>" . 3 . "</sub> = " . 3 . "<br>";
    for ($k = 4; $k <= $n; $k++) {
        $ak = $ar[$k - 1] + $ar[$k - 2] + 2 * $ar[$k - 3];
        echo "A<sub>" . $k . "</sub> = " . $ak . "<br>";
        array_push($ar, $ak);
    }
}
?>