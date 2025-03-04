<?php
if ($_POST) {

    if ($_POST['a']) {
        $a =  $_POST['a'];
        $r = ($a * 3.14) / 180;
        echo "radian = " . $r;
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
    <h1>Radiani topish</h1>
    <form action="29.php" method="POST">
        <input type="number" , placeholder="Gradus" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>