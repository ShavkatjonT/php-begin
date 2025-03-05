<?php
if ($_POST) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    if ($a > 0 && $b > 0 && $c > 0) {
        echo "Qiymatlar musbat  ";
    } else {
        echo "Barcha qiymatlar musbat bo'lishi kerak";
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
    <form action="12.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'>
        <input type="number" , placeholder="c" name='c'>
        <button type="submit">ok </button>
    </form>
</body>

</html>