<?php
if ($_POST) {

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $arr = [$a, $b, $c];
    $y = 0;
    foreach ($arr as $v) {
        if ($v > 0) {
            ++$y;
        } else {
        }
    };
    echo "natija " . $y;
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
    <h1>Uchta butun son berilgan. Ularning orasida nechta musbat son borligini aniqlash.</h1>
    <form action="4.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'> <br><br>
        <input type="number" , placeholder="c" name='c'>
        <button type="submit">ok </button>
    </form>





</body>

</html>