<?php
if ($_POST) {
    if ($_POST['a'] && $_POST['b']) {
        $a =  $_POST['a'];
        $b =  $_POST['b'];
        $c = sqrt(($a * $a) + ($b * $b));
        $p = $a + $b + $c;
        echo "gipatenuzasi = " . $c . "<br/>" . 'perimeter = ' . $p;
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
    <h1>To'ri burchakli uchburchak </h1>
    <form action="12.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'>

        <button type="submit">ok </button>
    </form>
</body>

</html>