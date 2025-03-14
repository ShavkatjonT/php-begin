<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N kattalikdagi massiv berilgan . Massivning o'ng qo'shnisidan katta bo'lgan elementlarining raqamlarini va bunday elementlarning sonini toping. Topilgan raqamlarni o'sish tartibida ko'rsating.


    </h1>

    <form action="30.php" method="POST">
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

    $fil = [];
    $c = 0;
    for ($i = 0; $i <= (count($arr) - 1); $i++) {
        if (((int)($arr[$i == (count($arr) - 1) ? $i : $i + 1])) < $arr[$i]) {
            $c++;
            $fil[$i] = $arr[$i];
        }
    }
    if (count($fil) > 0) {
        sort($fil);
        echo "soni $c , <br>";
        foreach ($fil as $key => $value) {
            echo "$key ->  $value <br>";
        }
    } else {
        echo "0";
    }
}
?>