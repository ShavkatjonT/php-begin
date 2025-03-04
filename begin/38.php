<?php
if ($_POST) {
    if ($_POST['a'] && $_POST['b']) {
        $a =  $_POST['a'];
        $b =  $_POST['b'];

        $x = -1 * ($b / $a);
        echo 'natija= ' . $x;
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
    <h1>ax+b=0</h1>
    <form action="38.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'>

        <button type="submit">ok </button>
    </form>
</body>

</html>