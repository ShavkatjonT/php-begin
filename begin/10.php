<?php
if ($_POST) {
    if ($_POST['a'] && $_POST['b']) {
        $a =  $_POST['a'];
        $b =  $_POST['b'];
        $y = ($a * $a) + ($b * $b);
        $ay = ($a * $a) - ($b * $b);
        $k = ($a * $a) * ($b * $b);
        $bo = ($a * $a) / ($b * $b);
        echo 'natija yig\'indi' . ' = ' .  $y . "<br>";
        echo 'natija ayirmasini ' . ' = ' .  $ay . "<br>";
        echo 'natija kvadratlari' . ' = ' .  $k . "<br>";
        echo 'natija bo\'limasi' . ' = ' .  $bo . "<br>";
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
    <h1>No'lga teng bo'lmagan 2 soni kvadratlari ustida ammalar</h1>
    <form action="10.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'>

        <button type="submit">ok </button>
    </form>
</body>

</html>