<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Haqiqiy son A va butun son N (> 0) berilgan. A ning N-darajasini topish:
        A^N = A·A·…·A (A soni N marta ko‘paytiriladi).
    </h1>
    <form action="15.php" method="POST">
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
    $b = 1;

    for ($i = 1; $i <= $n; $i++) {
        $b = $b * $a;
    }
    echo "natija " . $b;
}
?>