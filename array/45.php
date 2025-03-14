<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N kattalikdagi massiv berilgan . Ushbu massivdan ikkita eng yaqin elementning raqamlarini toping (ya'ni, eng kichik farq moduliga ega bo'lgan elementlar) va bu raqamlarni o'sish tartibida chiqaring.

    </h1>

    <form action="45.php" method="POST">
        <input type="number" name="n" placeholder="N" id="">
        <input type="string" placeholder="1,2,3,4,5,6,7 massiv" name="a"> <label for="">Masiv elmetmetlarni vergul bilan ajrating</label> <br><br>

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
        die("Masiv elmentlari n ta bo'lishi kerak!");
    }

    if (count($arr) <= 1) {
        die("Masiv elmentlari 1 tadan ortiq bo'lishi kerak!");
    }
    sort($arr);
    $min = abs($arr[1] - $arr[0]);
    $minval = [$arr[0], $arr[1]];
    for ($i = 1; $i <= $n - 1; $i++) {
        $b = abs($arr[$i] - $arr[$i - 1]);
        if ($min > $b) {
            $min = $b;
            array_shift($minval);
            array_shift($minval);
            array_push($minval, $arr[$i - 1], $arr[$i]);
        }
    }
    sort($minval);
    var_dump($minval);
}
?>