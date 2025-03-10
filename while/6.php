<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun musbat son N (> 0). N ning ikki martalik faktorialini toping:
        N!! = N·(N–2)·(N–4)·…
        (Agar N juft bo'lsa, oxirgi ko'paytuvchi 2 bo'ladi, agar toq bo'lsa, 1). Butun sonlar hajmidan oshib ketmasligi uchun hisoblashni haqiqiy sonlar bilan bajaring va natijani haqiqiy son sifatida chiqaring.
    </h1>
    <form action="6.php" method="POST">
        <input type="number" , placeholder="N" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $a = (int)  $_POST['a'];
    if ($a <= 0) {
        die("N ni qiymati musbatson bo'lishi kerak");
    }
    $c = 1;
    if ($a % 2 == 0) {
        while ($a >= 2) {
            $c = $c * $a;
            $a = $a - 2;
        }
    } else {
        while ($a >= 1) {
            $c = $c * $a;
            $a = $a - 2;
        }
    }



    echo $c . " ga teng";
}
?>