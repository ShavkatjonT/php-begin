<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        NA, NB, NC o‘lchamdagi uchta butun sonli massiv A, B, C berilgan, ularning elementlari kamayish tartibida joylashgan. Ularni birlashtirib, (NA + NB + NC) o‘lchamli yangi D massivini hosil qiling, shunda u ham kamayish tartibida bo‘lsin.




    </h1>

    <form action="64.php" method="POST">
        <input type="number" name="n" placeholder="N" id=""><br><br>
        <input type="string" placeholder="1,2,3,4,5,6,7 massiv A" name="a"> <label for="">Masiv elmetmetlarni vergul bilan ajrating</label> <br><br>
        <input type="string" placeholder="1,2,3,4,5,6,7 massiv B" name="b"> <label for="">Masiv elmetmetlarni vergul bilan ajrating</label> <br><br>
        <input type="string" placeholder="1,2,3,4,5,6,7 massiv C" name="c"> <label for="">Masiv elmetmetlarni vergul bilan ajrating</label> <br><br>

        <button type="submit">ok </button>
    </form>

</body>

</html>

<?php
if ($_POST) {
    $a =  $_POST["a"];
    $b =  $_POST["b"];
    $c =  $_POST["c"];
    $n = (int) $_POST["n"];
    $arr = explode(",", $a);
    $arr2 = explode(",", $b);
    $arr3 = explode(",", $c);
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
    foreach ($arr3 as $element) {
        if (!is_numeric($element)) {
            die("faqat sonlar dan iborat bo'lishi kerak so'zlar ishlatilmaslig kerak va beliglar ham faqat gian ramqa  va vergul! ");
        }
    }

    if (count($arr) != $n || count($arr2) != $n || count($arr3) != $n) {
        die("Massivlar elmentlari 5 ta bo'lishi kerak!");
    }
    $arr4 = array_merge($arr, $arr2, $arr3);

    rsort($arr4);
    echo "<br>D massiv <br>";
    foreach ($arr4 as $v) {
        echo " $v , ";
    }
}
?>