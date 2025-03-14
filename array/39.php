<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N kattalikdagi massiv berilgan . Uning monoton intervallari sonini toping (ya'ni, uning elementlari ko'payadigan yoki kamayadigan bo'limlar).
    </h1>

    <form action="39.php" method="POST">
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
    if ($n <= 0) {
        die("Massiv elementlari noldan katta bo'lishi kerak");
    }
    if (count($arr) != $n) {
        die("Masiv elmentlari n ta bo'lishi kerak!");
    }


    $c = 0;
    $i = 0;

    while ($i < $n) {
        $c++;
        while ($i < $n - 1 && $arr[$i] < $arr[$i + 1]) {
            $i++;
        }
        $i++;
    }


    $ka = 0;
    $ika = 0;

    while ($ika < $n) {
        if ($ika == 0 || $arr[$ika] >= $arr[$ika - 1]) {
            $ka++;
        }

        while ($ika + 1 < $n && $arr[$ika] > $arr[$ika + 1]) {
            $ika++;
        }

        $ika++;
    }

    echo "Kamayadigon = $ka  <br> Ko'payadigon = $c";
}
?>