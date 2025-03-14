<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N o‘lchamli A massivi berilgan. Yangi B va C massivlarini quyidagicha hosil qiling:

        B – A massivining barcha musbat elementlaridan iborat.
        C – A massivining barcha manfiy elementlaridan iborat.
        Natijada, avval B massivining o‘lchami va elementlari, so‘ng C massivining o‘lchami va elementlari chiqarilsin.








    </h1>

    <form action="62.php" method="POST">
        <input type="number" name="n" placeholder="N" id="">
        <input type="string" placeholder="1,2,3,4,5,6,7 massiv A" name="a"> <label for="">Masiv elmetmetlarni vergul bilan ajrating</label> <br><br>

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
        die("Massivlar elmentlari n ta bo'lishi kerak!");
    }
    $arr2 = [];
    $arr3 = [];

    for ($i = 0; $i <= $n - 1; $i++) {
        if ((int)($arr[$i]) > 0) {
            $arr2[] = $arr[$i];
        } else if ((int)($arr[$i]) < 0) {
            $arr3[] = $arr[$i];
        }
    }


    $c = count($arr2);
    echo "<br>B massivda $c ta element <br>";
    foreach ($arr2 as $v) {
        echo " $v , ";
    }

    $d = count($arr3);
    echo "<br>C massivda $d ta element <br>";
    foreach ($arr3 as $v) {
        echo " $v , ";
    }
}
?>