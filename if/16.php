<?php
if ($_POST) {
    $a = (int) $_POST['a'];
    $b = (int)$_POST['b'];
    $c = (int) $_POST['c'];
    if ($a <= $b && $b <= $c) {
        $a *= 2;
        $b *= 2;
        $c *= 2;
    } else {
        $a *= -1;
        $b *= -1;
        $c *= -1;
    }
    echo  ' a= ' . $a . "<br>" . "b= " . $b . "<br>" . "c= " . $c;
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
    <h1>Agar ularning qiymatlari o‘sish tartibida bo‘lsa, ularning har birini ikki baravar oshirish; aks holda, har birini teskari ishoraga almashtirish. </h1>
    <form action="16.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'> <br><br>
        <input type="number" , placeholder="c" name='c'>
        <button type="submit">ok </button>
    </form>
</body>

</html>