<?php
if ($_POST) {

    $x = (int) $_POST['a'];
    if ($x < 0) {
        echo 0;
    } else if (($x >= 0 && $x < 1) || ($x >= 2 && $x < 3)) {
        echo 1;
    } else if (($x >= 1 && $x < 2) || ($x >= 3 && $x < 4)) {
        echo -1;
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
    <h1>Haqiqiy son x berilgan. Quyidagi funksiya qiymatini aniqlash:</h1>
    <form action="27.php" method="POST">
        <input type="number" , placeholder="son" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>