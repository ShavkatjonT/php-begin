<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Massiv 14 . N kattalikdagi A massiv berilgan . Birinchidan, uning elementlarini juft raqamlar bilan chiqaring (raqamlarning o'sish tartibida), so'ngra uning elementlarini toq raqamlar bilan chiqaring (shuningdek, raqamlarning o'sish tartibida):
        A 2 , A 4 , A 6 , …, A 1 , A 3 , A 5 , ….
        Shartli operatordan foydalanmang.

    </h1>
    <form action="14.php" method="POST">
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
    $juft = array_filter($arr, function ($e, $in) {
        return (int)($e) % 2 == 0;
    }, ARRAY_FILTER_USE_BOTH);
    $toq = array_filter($arr, function ($e, $in) {
        return (int)($e) % 2 == 1;
    }, ARRAY_FILTER_USE_BOTH);
    sort($juft);
    sort($toq);
    echo "juft sonlar <br>";
    foreach ($juft as $key => $v) {
        echo "index  $key = > qiymat $v  <br>";
    }
    echo "toq sonlar <br>";
    foreach ($toq as $key => $v) {
        echo "index  $key = > qiymat $v  <br>";
    }
}
?>