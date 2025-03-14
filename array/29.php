<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N kattalikdagi A massiv berilgan . Uning toq sonli elementlaridan maksimal elementni toping: A 1 , A 3 , A 5 , …


    </h1>

    <form action="29.php" method="POST">
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

    $juft = array_filter($arr, function ($e, $in) {
        return (int)($e) % 2 == 1;
    }, ARRAY_FILTER_USE_BOTH);
    if (count($juft) > 0) {
        $arrvalues = array_values($juft);
        $max = (int) $arrvalues[0];
        for ($i = 0; $i <= count($arrvalues) - 1; $i++) {
            $b = (int) $arrvalues[$i];
            if ($max < $b) {
                $max = $b;
            }
        }
        echo $max;
    } else {
        echo "Massiv ichida toq sonlar mavjud emas!";
    }
}
?>