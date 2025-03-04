<?php
if ($_POST) {

    if ($_POST['a']) {
        $num = $_POST['a'];
        $num1 = (int)($num / 1000);
        echo "tonna butun qismi = " . $num1 . 't';
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
    <form action="2.php" method="POST">
        <input type="number" , placeholder="kilogramm" name='a'>
        <button type="submit">ok </button>
    </form>





</body>

</html>