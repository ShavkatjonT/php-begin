<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N (> 1) butun son , shuningdek, geometrik progressiyaning birinchi A hadi va D maxraji berilgan . Berilgan progressiyaning birinchi N hadini o‘z ichiga olgan N o‘lchamdagi massivni yarating va chiqaring :

        A , A · D , A · D 2 , A · D 3 , … .

    </h1>
    <form action="4.php" method="POST">
        <input type="number" placeholder="a" name="a">
        <input type="number" placeholder="d" name="d"> <br><br>
        <input type="number" placeholder="n" name="n"> <br><br>

        <button type="submit">ok </button>
    </form>

</body>

</html>

<?php
if ($_POST) {
    $a = (int) $_POST["a"];
    $d = (int) $_POST["d"];
    $n = (int) $_POST["n"];
    if ($n <= 0) {
        die("n ni qiymati no'ldan katta bo'lishi kerak ");
    }

    $ar = array();
    array_push($ar, $a);
    for ($i = 1; $i <= $n; $i++) {
        array_push($ar, ($a * $d * $i));
    }
    echo json_encode($ar);
}
?>