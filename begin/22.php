<?php
if ($_POST) {
    if ($_POST['a'] && $_POST['b']) {
        $a =  $_POST['a'];
        $b =  $_POST['b'];
        $s = $a;
        $a = $b;
        $b = $s;

        echo 'a' . ' = ' .  $a . "<br>";
        echo 'b' . ' = ' .  $b;
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
    <form action="22.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'>

        <button type="submit">ok </button>
    </form>
</body>

</html>