<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N kattalikdagi massiv berilgan . Uning na mahalliy minimum, na mahalliy maksimal bo‘lgan maksimal elementlarini toping ( lokal minimum va mahalliy maksimal ta’riflar Array32 va Array33 topshiriqlarida berilgan). Agar massivda bunday elementlar bo'lmasa, 0 ni chiqaring.

    </h1>

    <form action="36.php" method="POST">
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

    if ($n < 2) {
        die("massiv elmentlar soni 1 dan ko'p bo'lishi kerak");
    }


    $c = 0;
    $fil = [];
    $fil2 = [];

    for ($i = 1; $i <= $n - 1; $i++) {
        if (($arr[$i == ($n - 1) ? $i : $i + 1]) < $arr[$i] && ($arr[$i - 1]) < $arr[$i]) {
            $fil[] = $arr[$i];
        }
        if (($arr[$i == ($n - 1) ? $i : $i + 1]) > $arr[$i] && ($arr[$i - 1]) > $arr[$i]) {
            $fil2[] = $arr[$i];
        }
    }
    if (count($fil) == 0 && count($fil2)) {
        echo "0";
    } else {
        echo "Min mahaliy <br>";
        if (count($fil2) > 0) {
            foreach ($fil2 as $key => $value) {
                echo  " $value  <br>";
            }
        }
        echo "Max mahaliy <br>";
        if (count($fil) > 0) {
            foreach ($fil as $key => $value) {
                echo  " $value  <br>";
            }
        }
    }
}
?>