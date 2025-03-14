<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N kattalikdagi massiv berilgan . Uning elementlari monoton ravishda kamayadigan bo'limlar sonini toping.

    </h1>

    <form action="38.php" method="POST">
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
        if ($i == 0 || $arr[$i] >= $arr[$i - 1]) {
            $c++;
        }

        while ($i + 1 < $n && $arr[$i] > $arr[$i + 1]) {
            $i++;
        }

        $i++;
    }

    echo $c;
}
?>