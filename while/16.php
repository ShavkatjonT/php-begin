<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Sportchi birinchi kuni 10 km yugurdi. Har kuni u masofani P foizga oshirdi (P – haqiqiy son, 0 < P < 50). Berilgan P bo'yicha, umumiy yugurilgan masofa 200 km dan oshishi uchun necha kun kerakligini va umumiy masofani toping.
            </h1>
            <form action="16.php" method="POST">
                <input type="string" , placeholder="Foiz" name='a'>
                <button type="submit">ok </button>
            </form>
</body>

</html>

<?php
if ($_POST) {
    $a = (float)  $_POST['a'];
    if ($a <= 0 || $a >= 50) {
        die("Foizni qiymati 0 dan katta 50 dan kichik bo'lishi kerak ");
    }
    $kl = 10;
    $k = 0;
    $b = 0;
    while ($b <= 200) {
        $b = $b + $kl;
        $kl = $kl + ($kl * ($a / 100));
        $k++;
    }




    echo $b . " ga teng  "   . $k . " kunda ";
}
?>