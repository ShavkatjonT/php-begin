<?php
if ($_POST) {
    $a = $_POST['a'];
    $b = $_POST['b'];

    if (($a < 0 && $b > 0) || ($a < 0 && $b < 0)) {
        if ($a < 0 && $b > 0) {
            echo "to'g'ro kordinatlar 2 chorakda joylashgan";
        } else {
            echo "to'g'ro kordinatlar 3 chorakda joylashgan";
        }
    } else {
        echo "hato kordinatlar 2 yoki 3 da  chorakda joylshmangan";
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
    <form action="27.php" method="POST">
        <input type="number" , placeholder="x" name='a'>
        <input type="number" , placeholder="y" name='b'>
        <button type="submit">ok </button>
    </form>
</body>

</html>