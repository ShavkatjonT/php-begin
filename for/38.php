<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun son N (> 0). Quyidagi yig‘indini hisoblang:

        1ᴺ + 2ᴺ⁻¹ + … + N¹.

        To‘liq sonlarning to‘lib ketishini oldini olish uchun yig‘indining qo‘shiluvchilarini haqiqiy son sifatida hisoblash va natijani haqiqiy son sifatida chiqarish kerak.

    </h1>
    <form action="38.php" method="POST">
        <input type="number" , placeholder="N" name='b'>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $n = (int)  $_POST['b'];
    if ($n <= 0) {
        die("N  sonlari noldan katta bo'lishi kerak");
    }
    $y = 0.0;
    $n1 = $n;
    for ($i = 1; $i <= $n; $i++) {
        $y = $y + ($i ** $n1);
        $n1 = $n1 - 1;
    }
    echo "natija " . $y;
}
?>