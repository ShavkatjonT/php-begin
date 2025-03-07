<?php
if ($_POST) {

    $x = (int) $_POST['a'];
    if ($x > 2 || -2 > $x) {
        echo 2 * $x;
    } else {
        echo -3 * $x;
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
    <h1> Butun son x berilgan. Quyidagi funksiya qiymatini aniqlash:</h1>
    <form action="25.php" method="POST">
        <input type="number" , placeholder="son" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>