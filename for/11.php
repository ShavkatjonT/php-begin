<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Butun son N berilgan (N > 0). Quyidagi ifodaning yig‘indisini topish:
        N² + (N + 1)² + (N + 2)² + … + (2·N)² (butun son sifatida).
    </h1>
    <form action="11.php" method="POST">
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
    $b = 0;
    for ($i = 0; $i <= $a; $i++) {
        echo (($a + $i) ** 2) . "<br>";
        $b = $b + (($a + $i) ** 2);
    }
    echo "natija " . $b;
}
?>