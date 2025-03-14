<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Bir xil N o'lchamdagi A va B massivlar berilgan . Ularning mazmunini almashtiring va avval o'zgartirilgan A massivining elementlarini , keyin esa o'zgartirilgan B massivning elementlarini chiqaring .






    </h1>

    <form action="51.php" method="POST">
        <input type="number" name="n" placeholder="N" id="">
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
    $n = (int) $_POST["n"];
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
        die("Massivlar elmentlari n ta bo'lishi kerak!");
    }

    for ($i = 0; $i <= $n - 1; $i++) {
        $arv = (int) $arr[$i];
        $arr[$i] = (int) $arr2[$i];
        $arr2[$i] = (int) $arv;
    }

    echo "A massiv <br>";
    var_dump($arr);
    echo "<br>B massiv <br>";
    var_dump($arr2);
}
?>