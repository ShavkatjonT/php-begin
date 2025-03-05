<?php
if ($_POST) {
    $a = $_POST['a'];
    $b = $_POST['b'];

    if ($a >= 1 && $b >= 1 && $b <= 8 && $a <= 8) {
        $s = ($a + $b) % 2;
        if (!$s) {
            echo 'qora';
        } else {
            echo 'oq';
        }
    } else {
        echo "hato qiymatlar 1 dan yoki 8 gacha oraliqda son kititilishi kerak";
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
    <form action="34.php" method="POST">
        <input type="number" , placeholder="x" name='a'>
        <input type="number" , placeholder="y" name='b'>
        <button type="submit">ok </button>
    </form>
</body>

</html>