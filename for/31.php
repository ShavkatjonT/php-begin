<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun son N (> 0). Quyidagi rekursiv ketma-ketlik berilgan:

        A₀ = 2, Aₖ = 2 + 1/Aₖ₋₁, K = 1, 2, … .

        A₁, A₂, …, Aₙ elementlarini chiqarish.
    </h1>
    <form action="31.php" method="POST">
        <input type="number" , placeholder="N" name='n'>

        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $n = (int)  $_POST['n'];
    if ($n <= 0) {
        die("N ni qiymati noldan katta bo'lishi kerak");
    }
    $ar = [2];
    for ($k = 1; $k <= $n; $k++) {
        $ak = 2 + (1 / $ar[$k - 1]);
        echo "A<sub>" . $k . "</sub>= " . $ak . "<br>";
        array_push($ar, $ak);
    }
}
?>