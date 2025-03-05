<?php
if ($_POST) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];

    if (($a >= 1 && $b >= 1 && $b <= 8 && $a <= 8)
        && ($c >= 1 && $d >= 1 && $d <= 8 && $c <= 8)
    ) {

        if ((abs($a - $c) <= 1) && (abs($b - $d) <= 1)) {
            echo 'yurishi mumkun';
        } else {
            echo 'yo\'q  yura olmaydi';
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
    <form action="37.php" method="POST">
        <input type="number" , placeholder="x" name='a'>
        <input type="number" , placeholder="y" name='b'><br><br>
        <input type="number" , placeholder="x2" name='c'>
        <input type="number" , placeholder="y2" name='d'><br><br>
        <button type="submit">ok </button>
    </form>
</body>

</html>