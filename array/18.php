<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        10 o'lchamdagi nolga teng bo'lmagan butun sonlardan iborat A massiv berilgan. Uning A K < A 10 tengsizligini qanoatlantiruvchi A K elementlaridan birinchisining qiymatini chiqaring . Agar bunday elementlar bo'lmasa, 0 ni chiqaring. </h1>
            <form action="18.php" method="POST">
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
    $n = count($arr);
    $juft = array_filter($arr, function ($e, $in) use ($arr, $n) {
        return (int)($e) < ($arr[$n - 1]);
    }, ARRAY_FILTER_USE_BOTH);

    if (count($juft) == 0) {
        echo 0;
    } else {
        $newArr = array_values($juft);
        echo  $newArr[0];
    }
}
?>