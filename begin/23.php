<?php
if ($_POST) {
    if ($_POST['a'] && $_POST['b'] && $_POST['b']) {
        $a =  $_POST['a'];
        $b =  $_POST['b'];
        $c =  $_POST['c'];
        $s = $b;
        $e = $c;
        $d = $a;
        $b = $a;
        $a = $e;
        $c = $s;

        echo 'a' . ' = ' .  $a . "<br>";
        echo 'b' . ' = ' .  $b . "<br>";
        echo 'c' . ' = ' .  $c . "<br>";
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
    <h1>A va B ni qiymatni allmashtirish </h1>
    <form action="23.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'>
        <input type="number" , placeholder="c" name='c'>

        <button type="submit">ok </button>
    </form>
</body>

</html>