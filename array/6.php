<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N (> 2 ), A va B butun sonlar berilgan. Birinchi elementi A ga , ikkinchisi B ga teng va har bir keyingi element avvalgilari yig‘indisiga teng bo‘lgan N o‘lchamdagi butun sonli massivni yarating va chiqaring .

    </h1>
    <form action="6.php" method="POST">
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

    $ar = [$a, $d];
    for ($i = 2; $i < $n; $i++) {
        array_push($ar, ($ar[$i - 2] + $ar[$i - 1]));
    }
    echo json_encode($ar);
}
?>