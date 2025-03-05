<?php
if ($_POST) {
    $a = $_POST['a'];

    if ($a >= 1000 && 9999 >= $a) {
        $a1 = strval($a);
        $b = strrev($a1);

        if ($a1 == $b) {
            return "Berilgan son palindrom.";
        } else {
            return "Berilgan son palindrom emas.";
        }
    } else {
        echo "Berilgan son toq va 3 xonali. bo'lishi kerak";
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
    <form action="23.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>