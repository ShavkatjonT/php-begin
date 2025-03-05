<?php
if ($_POST) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    if ($a > $b) {
        echo "natija katta " .  $a . "  kichik " . $b;
    } else if ($a < $b) {
        echo "natija katta " .  $b . "  kichik " . $a;
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
    <h1>kki son berilgan. Dastlab kattasini, keyin kichigini ekranga chiqarish.</h1>
    <form action="8.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'>
        <button type="submit">ok </button>
    </form>





</body>

</html>