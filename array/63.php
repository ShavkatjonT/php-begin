<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Elementlari o'sish tartibida tartiblangan 5 o'lchamdagi ikkita A va B massivlar berilgan. Ushbu massivlarni shunday birlashtiringki, natijada hosil bo'lgan C massivi (o'lchami 10) o'sish tartibida qoladi.





    </h1>

    <form action="63.php" method="POST">
        <input type="number" disabled value="5" name="n" placeholder="N" id="">
        <input type="string" placeholder="1,2,3,4,5,6,7 massiv A" name="a"> <label for="">Masiv elmetmetlarni vergul bilan ajrating</label> <br><br>
        <input type="string" placeholder="1,2,3,4,5,6,7 massiv B" name="b"> <label for="">Masiv elmetmetlarni vergul bilan ajrating</label> <br><br>

        <button type="submit">ok </button>
    </form>

</body>

</html>

<?php
if ($_POST) {
    $a =  $_POST["a"];
    $b =  $_POST["b"];
    $n = 5;
    $arr = explode(",", $a);
    $arr2 = explode(",", $b);
    foreach ($arr as $element) {
        if (!is_numeric($element)) {
            die("faqat sonlar dan iborat bo'lishi kerak so'zlar ishlatilmaslig kerak va beliglar ham faqat gian ramqa  va vergul! ");
        }
    }
    foreach ($arr2 as $element) {
        if (!is_numeric($element)) {
            die("faqat sonlar dan iborat bo'lishi kerak so'zlar ishlatilmaslig kerak va beliglar ham faqat gian ramqa  va vergul! ");
        }
    }

    if (count($arr) != $n || count($arr2) != $n) {
        die("Massivlar elmentlari 5 ta bo'lishi kerak!");
    }
    $arr3 = array_merge($arr, $arr2);

    sort($arr3);
    echo "<br>C massiv <br>";
    foreach ($arr3 as $v) {
        echo " $v , ";
    }
}
?>