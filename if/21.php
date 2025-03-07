<?php
if ($_POST) {
    $a =(int) $_POST['a'];
    $b =(int) $_POST['b'];
    if ($a == 0 && $b == 0) {
        echo 0;
    } else if ($a == 0) {
        echo 1;
    } else if ($b == 0) {
        echo 2;
    } else {
        echo 3;
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
    <h1>Agar u koordinata boshiga to‘g‘ri kelsa, 0 chiqarish; agar OX yoki OY o‘qlarida joylashgan bo‘lsa, mos ravishda 1 yoki 2 chiqarish; agar hech bir o‘q ustida bo‘lmasa, 3 chiqarish</h1>
    <form action="21.php" method="POST">
        <input type="number" , placeholder="x" name='a'>
        <input type="number" , placeholder="y" name='b'>
        <button type="submit">ok </button>
    </form>

</body>

</html>