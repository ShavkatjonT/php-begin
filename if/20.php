<?php
if ($_POST) {
    $a = (int) $_POST['a'];
    $b = (int)$_POST['b'];
    $c = (int) $_POST['c'];
    $ab = abs($b - $a);
    $ac = abs($c - $a);

    if ($ab > $ac) {
        echo 'c ' . $ac;
    } else {
        echo 'b ' . $ab;
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
    <h1>A nuqtaga yaqinroq bo‘lgan nuqtani (B yoki C) va A dan unga bo‘lgan masofani aniqlash</h1>
    <form action="20.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'> <br><br>
        <input type="number" , placeholder="c" name='c'>
        <button type="submit">ok </button>
    </form>
</body>

</html>