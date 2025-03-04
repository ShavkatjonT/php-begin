<?php
if ($_POST) {
    if ($_POST['a'] && $_POST['b'] && $_POST['c'] && $_POST['d']) {
        $a =  $_POST['a'];
        $b =  $_POST['b'];
        $c =  $_POST['c'];
        $d =  $_POST['d'];
        $s = $d - ($a + $b) * $c;

        echo 'orasidagi masofa= ' . $s;
    } else {
        echo "inputlarga qiymat kiriting";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="37.php" method="POST">
        <input type="number" , placeholder="mashin 1" name='a'>
        <input type="number" , placeholder="mashina 2" name='b'>
        <br><br>
        <input type="number" , placeholder="soat" name='c'>
        <input type="number" , placeholder="boshlang'ich masofa" name='d'>

        <button type="submit">ok </button>
    </form>
</body>

</html>