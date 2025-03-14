<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N kattalikdagi massiv berilgan . Uning mahalliy minimalining maksimalini toping ( mahalliy minimumning ta'rifi Array32 topshirig'ida berilgan).


    </h1>

    <form action="34.php" method="POST">
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
    for ($i = 1; $i <= $n - 1; $i++) {
            if (($arr[$i == ($n - 1) ? $i : $i + 1]) > $arr[$i] && ($arr[$i - 1]) > $arr[$i]) {
                $fil[] = $arr[$i];
            }
    }

    if (count($fil) == 0) {
        echo "bunday qiymat topilmmadi";
    } else {
        $arv = array_values($fil);
        $max = $arv[0];
        for ($i = 0; $i <= count($arv) - 1; $i++) {
            if ($max < $arv[$i]) {
                $max = $arv[$i];
            }
        }
        echo $max;
    }
}
?>