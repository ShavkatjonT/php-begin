<?php
if ($_POST) {

    $x = (int) $_POST['a'];
    if ($x > 0) {
        echo 2 * sin($x);
    } else {
        echo 6 - $x;
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
    <form action="24.php" method="POST">
        <input type="number" , placeholder="son" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>