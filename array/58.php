<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N o‘lchamli A massivi berilgan. Shu o‘lchamdagi yangi B massivini quyidagi qoida asosida hosil qiling:

        BK – A massivining 1-dan K-gacha bo‘lgan elementlar yig‘indisiga teng.








    </h1>

    <form action="58.php" method="POST">
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
    $s = 0;

    for ($i = 0; $i <= $n - 1; $i++) {
        $s += (int) $arr[$i];
        $arr2[] = $s;
    }


    $c = count($arr2);
    echo "<br>B massiv $c ta element <br>";
    foreach ($arr2 as $v) {
        echo " $v , ";
    }
}
?>