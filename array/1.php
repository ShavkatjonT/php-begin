<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun son N(>0). Hajmi 𝑁 bo‘lgan butun sonli massivni hosil qiling va chiqarib bering, unda dastlabki 𝑁
        N ta musbat toq sonlar joylashgan: 1, 3, 5, … .
    </h1>
    <form action="1.php" method="POST">
        <input type="number" placeholder="N" name="a"> <br><br>

        <button type="submit">ok </button>
    </form>





</body>

</html>

<?php
if ($_POST) {
    $a = $_POST["a"];
    if ($a <= 0) {
        die("n ni qiymati no'ldan katta bo'lishi kerak ");
    }

    $ar = array();
    for ($i = 0; $i < $a; $i++) {
        array_push($ar, 2 * $i + 1);
    }
    echo json_encode($ar);
}
?>