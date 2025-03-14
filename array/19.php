<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        10 o‘lchamli A butun sonli massiv berilgan. Uning A 1 < A K < A 10 qo‘sh tengsizlikni qanoatlantiruvchi A K elementlaridan oxirgisining tartib raqamini chop eting . Agar bunday elementlar bo'lmasa, 0 ni chiqaring.</h1>
            <form action="19.php" method="POST">
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
    $newArr = array_values($arr);
    $filterarr1 = array_filter($newArr, function ($e, $in) use ($newArr, $n) {
        return  (int)($e) > ($newArr[0]);
    }, ARRAY_FILTER_USE_BOTH);
    if (count($filterarr1) == 0) {
        die("0");
    }
    $newArr2 = array_values($filterarr1);
    $filterarr2 = array_filter($newArr2, function ($e, $in) use ($newArr2, $n) {
        return  (int)($e) < ($newArr2[count($newArr2) - 1]);
    }, ARRAY_FILTER_USE_BOTH);

    if (count($filterarr2) == 0) {
        echo 0;
    } else {
        $newArr3 = array_values($filterarr2);

        echo  $newArr3[count($newArr3) - 1];
    }
}
?>