<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N kattalikdagi massiv berilgan . Yig'indisi maksimal bo'lgan ikkita qo'shni elementni toping va bu elementlarni indekslarining o'sish tartibida chiqaring.


    </h1>

    <form action="41.php" method="POST">
        <input type="number" name="n" placeholder="N" id="">
        <input type="string" placeholder="1,2,3,4,5,6,7 massiv" name="a"> <label for="">Masiv elmetmetlarni vergul bilan ajrating</label> <br><br>

        <button type="submit">ok </button>
    </form>

</body>

</html>

<?php
if ($_POST) {
    $a =  $_POST["a"];
    $n = (int) $_POST["n"];
    $arr = explode(",", $a);
    foreach ($arr as $element) {
        if (!is_numeric($element)) {
            die("faqat sonlar dan iborat bo'lishi kerak so'zlar ishlatilmaslig kerak va beliglar ham faqat gian ramqa  va vergul! ");
        }
    }
    if (count($arr) != $n) {
        die("Masiv elmentlari n ta bo'lishi kerak!");
    }
    if (count($arr) <= 1) {
        die("Masiv elmentlari 1 tadan ortiq bo'lishi kerak!");
    }

    $y = (int)($arr)[0]  + (int) ($arr)[1];
    $a1 = ($arr)[0];
    $a2 = ($arr)[1];
    for ($i = 0; $i < $n - 1; $i++) {
        $c = (int)($arr)[$i]  + (int) ($arr)[$i + 1];
        if ($c > $y) {
            $a1 = ($arr)[$i];
            $a2 = ($arr)[$i + 1];
        }
    }

    echo "$a1 va $a2";
}
?>