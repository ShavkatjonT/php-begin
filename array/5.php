<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N (> 2) butun soni berilgan. Fibonachchi F K ketma-ketligining birinchi N elementini o'z ichiga olgan N o'lchamdagi butun sonli massivni yarating va chop eting :

        F 1 = 1, F 2 = 1, F K = F K –2 + F K –1 , K = 3, 4, … .

    </h1>
    <form action="5.php" method="POST">

        <input type="number" placeholder="n" name="n"> <br><br>

        <button type="submit">ok </button>
    </form>

</body>

</html>

<?php
if ($_POST) {
    $n = (int) $_POST["n"];
    if ($n <= 2) {
        die("n ni qiymati 2 dan katta bo'lishi kerak ");
    }

    $ar = array(0, 1, 1);

    for ($i = 3; $i <= $n; $i++) {
        array_push($ar, ($ar[$i - 2] + $ar[$i - 1]));
    }
    array_shift($ar);
    echo json_encode($ar);
}
?>