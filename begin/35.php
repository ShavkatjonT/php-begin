<?php
if ($_POST) {
    if ($_POST['a'] && $_POST['b'] && $_POST['c'] && $_POST['d']) {
        $a =  $_POST['a'];
        $b =  $_POST['b'];
        $c =  $_POST['c'];
        $d =  $_POST['d'];
        if ($a > $c) {
            $sum1 = $b * $a;
            $sum2 = ($a - $c) * $d;
            $sum3 = $sum1 + $sum2;
            echo "umumiy masafa= " . $sum3;
        } else {
            echo 'qayini tezligi daryooni tezligidan baland bo\'lishi kerak';
        }
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

    <form action="35.php" method="POST">
        <input type="number" , placeholder="Qayini tezligi" name='a'>
        <input type="number" , placeholder="Qayini vaqti" name='b'>
        <br><br>
        <input type="number" , placeholder="Dayo tezligi" name='c'>
        <input type="number" , placeholder="dayodagi vaqt" name='d'>

        <button type="submit">ok </button>
    </form>
</body>

</html>