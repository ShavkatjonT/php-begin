<?php
if ($_POST) {
    if ($_POST['a'] && $_POST['b'] && $_POST['c']) {
        $a =  $_POST['a'];
        $b =  $_POST['b'];
        $c =  $_POST['c'];
        $sum1 = $b / $a;
        $sum2 = $c * $sum1;
        echo "summasi= " . $sum2;
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

    <form action="33.php" method="POST">
        <input type="number" , placeholder="kilogram" name='a'>
        <input type="number" , placeholder="summa" name='b'>
        <br><br>
        <input type="number" , placeholder="necha kilogram" name='c'>

        <button type="submit">ok </button>
    </form>
</body>

</html>