<?php
if ($_POST) {
    if ($_POST['s']) {
        $a =  $_POST['s'];
        $p = 3.14;
        $d = sqrt(($a * 4) / $p);
        $l = $p * $d;

        echo "natija diameter D = " . $d . "<br/>" . "uzunligi L = " . $l;
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
    <form action="15.php" method="POST">
        <input type="number" , placeholder="Alana mayoni kiring " name='s'>

        <button type="submit">ok </button>
    </form>
</body>

</html>