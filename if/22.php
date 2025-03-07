<?php
if ($_POST) {
    $x = (int) $_POST['a'];
    $y = (int) $_POST['b'];
    if ($x > 0 && $y > 0) {
        echo "1 chorak";
    } else if ($x < 0 && $y > 0) {
        echo "2 chorak";
    } else if ($x < 0 && $y < 0) {
        echo "3 chorak";
    } else if ($x > 0 && $y < 0) {
        echo "4 chorak";
    } else {
        echo "kortinata boshida";
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
    <h1> OX va OY koordinata o‘qlarida joylashmagan nuqta koordinatalari berilgan. Ushbu nuqta qaysi koordinata choragida joylashganligini aniqlash.</h1>
    <form action="22.php" method="POST">
        <input type="number" , placeholder="x" name='a'>
        <input type="number" , placeholder="y" name='b'>
        <button type="submit">ok </button>
    </form>

</body>

</html>