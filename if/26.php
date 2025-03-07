<?php
if ($_POST) {

    $x = (int) $_POST['a'];
    if ($x < 0) {
        echo -$x;
    } else if ($x > 0 && $x < 2) {
        echo $x ** 2;
    } else if ($x >= 2) {
        echo 4;
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
    <h1> Haqiqiy son x berilgan. Quyidagi funksiya qiymatini aniqlash:</h1>
    <form action="26.php" method="POST">
        <input type="number" , placeholder="son" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>