<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N hajmli massiv va K va L (1 <= K <=L <=N ) butun sonlar berilgan. K dan L gacha bo‘lgan sonlar bilan massiv elementlarining o‘rta arifmetik qiymatini toping .


            </h1>
            <form action="21.php" method="POST">
                <input type="number" name="n" placeholder="N" id="">
                <input type="string" placeholder="1,2,3,4,5,6,7 massiv" name="a"> <label for="">Masiv elmetmetlarni vergul bilan ajrating</label> <br><br>
                <input type="number" name="k" placeholder="K" id="">
                <input type="number" name="l" placeholder="L" id="">
                <button type="submit">ok </button>
            </form>

</body>

</html>

<?php
if ($_POST) {
    $a =  $_POST["a"];
    $k = (int) $_POST["k"];
    $l = (int) $_POST["l"];
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
    if ($arr[0] < 1 || $arr[0] > 1) {
        die("Massiv elmetlari 1 dan boshlashi kerak!");
    }
    $inSotrarr2 = $arr;
    sort($arr);
    if ($inSotrarr2 != $arr) {
        die("Massiv elementlari o'sish taribida bo'lishi kerak");
    }
    if (1 > $k) {
        die("K ni qiymati 1 ga teng yoki unda katta bo'lishi kerak!");
    }
    if ($l < $k) {
        die("K ni qiymati L ga teng yoki unda kichik bo'lishi kerak!");
    }
    if ($l > $n) {
        die("N ni qiymati L ga teng yoki unda katta bo'lishi kerak!");
    }

    $b = 0;
    $c = 0;
    for ($i = $k; $i <= $l; $i++) {
        $c++;
        $b += (int)$arr[$i - 1];
    }
    $b = $b / $c;
    echo "natija $b";
}
?>