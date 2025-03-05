<?php
if ($_POST) {
    $a = $_POST['a'];

    if (!($a % 2) && $a >= 10 && 99 > $a) {
        echo "B";
    } else {
        echo "Berilgan son juft va ikki xonali. bo'lishi kerak";
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
    <form action="16.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>