<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Bir xil sonlarni o'z ichiga olmaydigan N o'lchamdagi butun sonli massiv berilgan . Uning elementlari arifmetik progressiya hosil qilganligini tekshiring



        (3 massiv vazifasiga qarang). Agar ular bajarilsa, progressiyadagi farqni chiqaring, agar bo'lmasa, 0 chiqaring.

    </h1>
    <form action="24.php" method="POST">
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
            die("faqatsonlar dan iborat bo'lishi kerak so'zlar ishlatilmaslig kerak va beliglar ham faqat gian ramqa  va vergul! ");
        }
    }
    if (count($arr) != $n) {
        die("Masiv elmentlari n ta bo'lishi kerak!");
    }
    if (count($arr) == 1) {
        die("0");
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
            die('0');
            return;
        }
    }
    echo $d;
}
?>