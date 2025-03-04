<?php
if ($_POST) {
    if ($_POST['l']) {
        $a =  $_POST['l'];
        $p = 3.14;
        $r = $a / (2 * $p);
        $s = $p * ($r * $r);

        echo "natija  S = " . $s . "<br/>" . "Radius = " . $r;
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
    <h1>Aylana </h1>
    <form action="14.php" method="POST">
        <input type="number" , placeholder="L" name='l'>

        <button type="submit">ok </button>
    </form>
</body>

</html>