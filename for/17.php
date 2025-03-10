<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Haqiqiy son A va butun son N (> 0) berilgan. Bitta sikl yordamida quyidagi ifodaning yig‘indisini topish:
        1 + A + A² + A³ + … + A^N.
    </h1>
    <form action="17.php" method="POST">
        <input type="number" , placeholder="A" name='a'>
        <input type="number" , placeholder="N" name='b'>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $a = (int)  $_POST['a'];
    $n = (int)  $_POST['b'];
    if ($n <= 0) {
        die("N nol dan  katta bo'lsin");
    }
    $b = 0;

    for ($i = 0; $i <= $n; $i++) {
        $b = $b + ($a ** $i);
    }
    echo "a ni darajlari yig'idisi " . $b . " ga teng <br>";
}
?>