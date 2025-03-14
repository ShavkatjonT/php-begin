<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        R soni va N kattalikdagi massiv berilgan . Yig‘indisi R soniga eng yaqin bo‘lgan massivning ikki xil elementini toping va bu elementlarni indekslarining o‘sish tartibida chiqaring (eng yaqin raqamlarning ta’rifi Array40 topshirig‘ida berilgan).
    </h1>

    <form action="46.php" method="POST">
        <input type="number" name="r" placeholder="R" id="">
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
    $r = (int) $_POST["r"];
    $arr = explode(",", $a);
    foreach ($arr as $element) {
        if (!is_numeric($element)) {
            die("faqat sonlar dan iborat bo'lishi kerak so'zlar ishlatilmaslig kerak va beliglar ham faqat gian ramqa  va vergul! ");
        }
    }
    if (count($arr) != $n) {
        die("Masiv elmentlari n ta bo'lishi kerak!");
    }


    $y = abs(((int)($arr)[0] + (int)($arr)[1]) - $r);
    $in1 = 0;
    $in2 = 1;
    for ($i = 0; $i <= $n - 1; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            $yi = abs(($arr[$i] + $arr[$j]) - $r);
            if ($yi < $y) {
                $y = $yi;
                $in1 = $i;
                $in2 = $j;
            }
        }
    }

    echo $arr[$in1] .  " va " . $arr[$in2];
}
?>