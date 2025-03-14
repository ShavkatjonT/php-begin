<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N o'lchamdagi nolga teng bo'lmagan butun sonlar massivi berilgan . Uning musbat va manfiy raqamlar o'rtasida almashinishini tekshiring. Agar ular bir-birini almashtirsa, 0 ni chiqaring, agar bo'lmasa, naqshni buzgan birinchi elementning tartib raqamini chiqaring. </h1>
    <form action="27.php" method="POST">
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
    if (count($arr) == 1) {
        die("Massiv da kammida 2 ta elemet mavjud bo'lishi kerak");
    }
    $counterEl = array_count_values($arr);
    foreach ($counterEl as $key => $value) {
        if (1 < $value) {
            die("Massiv ichida bir xil bo'lgan qiymat ishlatilmas");
        }
    }
    $d = (int)($arr[1]) - (int)($arr[0]);
    for ($i = 1; $i <= $n - 1; $i++) {
        if (((int)($arr[$i]) - (int)($arr[$i - 1])) != $d) {
            die("tartib raqami " . ++$i . " shunga teng bo'lgan qiymat buzmoqda ");
            return;
        }
    }
    echo 0;
}
?>