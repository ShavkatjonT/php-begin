<?php
if ($_POST) {

    if ($_POST['a']) {
        $a =  $_POST['a'];
        $s = ($a * 9) / 5 + 32;
        echo "Farengeyt = " . $s;
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
    <h1>Harorat farengey</h1>
    <form action="32.php" method="POST">
        <input type="number" , placeholder="selsiy" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>