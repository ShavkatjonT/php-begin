<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Butun son N (> 0) berilgan. Quyidagi ko‘paytmani topish:
        N! = 1·2·…·N (N-faktorial).
        Butun sonning haddan tashqari kattalashishini oldini olish uchun hisoblashlarni haqiqiy o‘zgaruvchi yordamida bajarish va natijani haqiqiy son sifatida chiqarish.
    </h1>
    <form action="19.php" method="POST">
        <input type="number" , placeholder="N" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $a = (int)  $_POST['a'];
    if ($a <= 0) {
        die("N nol dan  katta bo'lsin");
    }
    $b = (float) 1.0;
    for ($i = 1.0; $i <= $a; $i++) {
        $b = $b * $i;
    }
    echo "natija " . $b;
}
?>