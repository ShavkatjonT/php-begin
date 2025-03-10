<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan A va B musbat sonlari (A > B). Uzunligi A bo'lgan kesmada uzunligi B bo'lgan maksimal kesmalar joylashtirilgan (o'zaro kesishmasdan). Ko'paytirish va bo'lish amallarini ishlatmasdan, nechta B uzunlikdagi kesma joylashganini toping.
    </h1>
    <form action="2.php" method="POST">
        <input type="number" , placeholder="A" name='a'>
        <input type="number" , placeholder="B" name='b'>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $a = (int)  $_POST['a'];
    $b = (int)  $_POST['b'];
    if ($a <= $b || $a <= 0 || $b <= 0) {
        if ($a <= 0) {
            die("A ni qiymati musbatson bo'lishi kerak");
        } else if ($b <= 0) {
            die("B ni qiymati musbatson bo'lishi kerak");
        } else {
            die("A ni qiymati B dan katta bo'lishi kerak");
        }
    }
    $n = 0;
    while ($a >= $b) {
        $a = $a - $b;
        $n++;
    }
    echo $n;
}
?>