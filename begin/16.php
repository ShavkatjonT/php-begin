<?php
if ($_POST) {
    if ($_POST['a'] && $_POST['b']) {
        $a =  $_POST['a'];
        $b =  $_POST['b'];
        $s = abs($b - $a);
        echo "masafa = " . $s;
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
    <h1>berilgan ikki koordinata nuqta orasidagi masofa</h1>
    <form action="16.php" method="POST">
        <input type="number" , placeholder="x1" name='a'>
        <input type="number" , placeholder="x2" name='b'>

        <button type="submit">ok </button>
    </form>
</body>

</html>