<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N kattalikdagi A massiv berilgan ( N - juft son). Uning elementlarini juft sonlar bilan raqamlarning ortib borish tartibida chop eting: A 2 , A 4 , A 6 , …, A N . Shartli operatordan foydalanmang
    </h1>
    <form action="12.php" method="POST">
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
        return (int)($e) % 2 == 0;
    }, ARRAY_FILTER_USE_BOTH);
    foreach ($kar as $key => $v) {
        echo "index  $key = > qiymat $v  <br>";
    }
}
?>