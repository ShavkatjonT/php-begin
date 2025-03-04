<?php
if ($_POST) {

    if ($_POST['a']) {
        $a =  $_POST['a'];
        $s = 4 * (($a - 3) ** 6) - 7 * (($a - 3) ** 3) + 2;

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
    <form action="26.php" method="POST">
        <input type="number" , placeholder="x" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>