<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun musbat sonlar N va K. Faqat qo'shish va ayirish amallaridan foydalanib, N ni K ga bo'lgandagi butun qismini va qoldig'ini toping.
    </h1>
    <form action="3.php" method="POST">
        <input type="number" , placeholder="K" name='b'>
        <input type="number" , placeholder="N" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $a = (int)  $_POST['a'];
    $b = (int)  $_POST['b'];
    if ($a <= 0 || $b <= 0) {
        if ($a <= 0) {
            die("N ni qiymati musbatson bo'lishi kerak");
        } else if ($b <= 0) {
            die("K ni qiymati musbatson bo'lishi kerak");
        }
    }
    while ($a >= $b) {
        $a = $a - $b;
    }
    echo $a;
}
?>