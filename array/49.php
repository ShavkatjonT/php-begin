<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N o'lchamli butun sonli massiv berilgan . Agar u almashtirish bo'lsa , ya'ni u 1 dan N gacha bo'lgan barcha raqamlarni o'z ichiga oladi , keyin 0 ni chop eting; aks holda, birinchi yaroqsiz elementning raqamini chiqaring.






    </h1>

    <form action="49.php" method="POST">
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



    $counterEl = array_count_values($arr);
    $c = 0;
    foreach ($counterEl as $key => $value) {
        if ($value > 1) {
            $c++;
        }
    }

    echo $c . " ta";
}
?>