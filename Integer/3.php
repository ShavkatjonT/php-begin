<?php
if ($_POST) {

    if ($_POST['a']) {
        $num = $_POST['a'];
        $num1 = (int)($num / 1024);
        echo "kilobayt butun qismi = " . $num1 . 'kb';
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
    <form action="3.php" method="POST">
        <input type="number" , placeholder="bayt" name='a'>
        <button type="submit">ok </button>
    </form>





</body>

</html>