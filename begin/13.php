<?php
if ($_POST) {
    if ($_POST['r1'] && $_POST['r2']) {
        $a =  $_POST['r1'];
        $b =  $_POST['r2'];
        if ($a > $b) {
            $p = 3.14;
            $s1 = $p * ($a * $a);
            $s2 = $p * ($b * $b);
            $s3 = $s1 - $s2;
            echo "natija  S1 = " . $s1 . "<br/>" . "S2 = " . $s2 . "<br/>" . "S3 = " . $s3;
        } else {
            echo "R1 radius R2 radiusdan katta bo'lishi kerak ";
        }
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
    <h1>Aylana larni maydoni </h1>
    <form action="13.php" method="POST">
        <input type="number" , placeholder="R1" name='r1'>
        <input type="number" , placeholder="R2" name='r2'>

        <button type="submit">ok </button>
    </form>
</body>

</html>