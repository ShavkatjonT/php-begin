<?php
if ($_POST) {
    if ($_POST['a'] && $_POST['b'] && $_POST['c'] && $_POST['d']) {
        $a =  $_POST['a'];
        $b =  $_POST['b'];
        $c =  $_POST['c'];
        $d =  $_POST['d'];
        $sum1 = $b / $a;
        $sum2 = $d / $c;
        $sum3 = $sum1 - $sum2;
        echo "orasidagi farq bo'lgan summasi= " . $sum3;
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

    <form action="34.php" method="POST">
        <input type="number" , placeholder="konfet kilogram" name='a'>
        <input type="number" , placeholder="konfet summa" name='b'>
        <br><br>
        <input type="number" , placeholder="iris kilogram" name='c'>
        <input type="number" , placeholder="iris summa" name='d'>

        <button type="submit">ok </button>
    </form>
</body>

</html>