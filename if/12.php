<?php
if ($_POST) {
    $a = (int) $_POST['a'];
    $b = (int)$_POST['b'];
    $c = (int) $_POST['c'];
    $minv = 0;
    if ($a <= $b && $a <= $c) {
        $minv = $a;
    } else if ($b <= $a && $b <= $c) {
        $minv = $b;
    } else {
        $minv = $c;
    }


    echo "natija  " . $minv;
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
    <h1>Uchta son berilgan. Ularning eng kichigini topish.</h1>
    <form action="12.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'> <br><br>
        <input type="number" , placeholder="c" name='c'>
        <button type="submit">ok </button>
    </form>
</body>

</html>