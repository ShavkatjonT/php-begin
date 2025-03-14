<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N kattalikdagi A massiv berilgan . Uning elementlarini quyidagi tartibda chiqaring:

        A 1 , A N , A 2 , A N –1 , A 3 , A N –2 , … .
    </h1>
    <form action="16.php" method="POST">
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
    $l = 0;
    $r = $n - 1;

    while ($l <= $r) {
        echo $arr[$l] . " , ";
        if ($l != $r) {
            echo $arr[$r] . " , ";
        }
        $l++;
        $r--;
    }
}
?>