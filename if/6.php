<?php
if ($_POST) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    if ($a > $b) {
        echo "natija " .  $a;
    } else if ($a < $b) {
        echo "natija " .  $b;
    } else {
        echo "natija teng " . $a . "=" . $b;
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
    <h1>Ikki son berilgan. Ularning kattasini ekranga chiqarish.</h1>
    <form action="6.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'>
        <button type="submit">ok </button>
    </form>





</body>

</html>