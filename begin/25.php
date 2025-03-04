<?php
if ($_POST) {

    if ($_POST['a']) {
        $a =  $_POST['a'];
        $s = 3 * ($a ** 6) - 6 * ($a ** 2) - 7;

        echo 'natija' . ' = ' .  $s;
    } else {
        echo "inputga qiymat kiriting";
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
    <h1>funksiyni hisoblash</h1>
    <form action="25.php" method="POST">
        <input type="number" , placeholder="x" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>