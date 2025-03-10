<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan A va B musbat sonlari (A > B). Uzunligi A bo'lgan kesmada uzunligi B bo'lgan maksimal kesmalar joylashtirilgan (o'zaro kesishmasdan). Ko'paytirish va bo'lish amallarini ishlatmasdan, kesma A ning band bo'lmagan qismini toping.

    </h1>
    <form action="1.php" method="POST">
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
    if ($a <= $b) {
        die("A ni qiymati B dan katta bo'lishi kerak");
    }
    $n = $a;
    while ($n >= $b) {
        $n = $n - $b;
    }
    echo $n;
}
?>