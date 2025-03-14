<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N (> 1) butun son , shuningdek arifmetik progressiyaning birinchi A hadi va D ayirmasi berilgan . Berilgan progressiyaning birinchi N hadini o‘z ichiga olgan N o‘lchamdagi massivni yarating va chiqaring :

        A , A + D , A + 2· D , A + 3· D , … . </h1>
    <form action="3.php" method="POST">
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
    for ($i = 0; $i < $n; $i++) {
        array_push($ar, ($a + $d * $i));
    }
    echo json_encode($ar);
}
?>