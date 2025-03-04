<?php
if ($_POST) {
    if ($_POST['a'] && $_POST['b'] && $_POST['c']) {
        $a =  $_POST['a'];
        $b =  $_POST['b'];
        $c =  $_POST['c'];

        if ($c > $a && $c > $b) {
            $n = ($c - $a) + ($c - $b);
            echo 'natija= ' . $n;
        } else {
            echo "c ni qiymat a va b dan katta bo'lishi kerak ";
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
    <h1>Sonlar o'qida</h1>
    <form action="17.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'>
        <input type="number" , placeholder="c" name='c'>

        <button type="submit">ok </button>
    </form>
</body>

</html>