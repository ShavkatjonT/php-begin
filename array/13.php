<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Massiv 13 . N kattalikdagi A massivi berilgan ( N - toq son). Uning elementlarini toq sonlar bilan raqamlarning kamayish tartibida chop eting: A N , A N –2 , A N –4 , …, A 1 . Shartli operatordan foydalanmang.


    </h1>
    <form action="13.php" method="POST">
        <input type="string" placeholder="1,2,3,4,5,6,7" name="a"> <label for="">Masiv elmetmetlarni vergul bilan ajrating</label> <br><br>
        <button type="submit">ok </button>
    </form>

</body>

</html>

<?php
if ($_POST) {
    $a =  $_POST["a"];

    $arr = explode(",", $a);
    foreach ($arr as $element) {
        if (!is_numeric($element)) {
            die("faqatsonlar dan iborat bo'lishi kerak so'zlar ishlatilmaslig kerak va beliglar ham faqat gian ramqa  va vergul ");
        } else {
        }
    }
    $kar = array_filter($arr, function ($e, $in) {
        return (int)($e) % 2 == 1;
    }, ARRAY_FILTER_USE_BOTH);
    rsort($kar);
    foreach ($kar as $key => $v) {
        echo "index  $key = > qiymat $v  <br>";
    }
}
?>