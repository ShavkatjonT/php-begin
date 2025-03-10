<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun musbat sonlar N va K. Quyidagi yig‘indini hisoblang:

        1ᴷ + 2ᴷ + … + Nᴷ.

        To‘liq sonlarning to‘lib ketishini oldini olish uchun yig‘indining qo‘shiluvchilarini haqiqiy son sifatida hisoblash va natijani haqiqiy son sifatida chiqarish kerak.


    </h1>
    <form action="36.php" method="POST">
        <input type="number" , placeholder="K" name='a'>
        <input type="number" , placeholder="N" name='b'>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $k = (int)  $_POST['a'];
    $n = (int)  $_POST['b'];
    if ($n <= 0 || $k <= 0) {
        die("N va K sonlari noldan katta bo'lishi kerak");
    }
    $y = 0;

    for ($i = 1; $i <= $n; $i++) {
        $y = $y + ($i ** $k);
    }
    echo "natija " . $y;
}
?>