<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Bankdagi boshlang'ich omonat 1000 rubl. Har oy omonat hajmi P foizga oshadi (P – haqiqiy son, 0 < P < 25). Berilgan P bo'yicha, omonat hajmi 1100 rubldan oshishi uchun nechta oy kerak bo'lishini va yakuniy summani toping.

            </h1>
            <form action="15.php" method="POST">
                <input type="string" , placeholder="Foyziz" name='a'>
                <button type="submit">ok </button>
            </form>
</body>

</html>

<?php
if ($_POST) {
    $a = (float)  $_POST['a'];
    if ($a <= 0 || $a >= 25) {
        die("Foyizni qiymati 0 dan katta 25 dan kichik bo'lishi kerak ");
    }

    $k = 0;
    $b = 0;
    $sum = 1000;
    while ($b <= 1100) {
        $b = $b + $sum;
        $sum = $sum + (($sum * $a) / 100);
        $k++;
    }




    echo $b . " ga teng  "   . $k . ' oyda';
}
?>