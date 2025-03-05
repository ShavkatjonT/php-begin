<?php
if ($_POST) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    if ($a > $b) {
        $c = $a;
        $a = $b;
        $b = $c;
        echo "natija a " .  $a . "  b " . $b;
    } else if ($a < $b) {
        echo "natija a " .  $a . "  b " . $b;
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
    <h1>A kichik qiymatni, B esa katta qiymatni qabul qilsin.</h1>
    <form action="9.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'>
        <button type="submit">ok </button>
    </form>

</body>

</html>