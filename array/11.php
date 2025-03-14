<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Massiv 11 . N kattalikdagi A massiv va butun K (1 <= K <=N ) berilgan. Tartib sonlari K ga karrali massiv elementlarini chop eting : A K , A 2· K , A 3· K , … . Shartli operatordan foydalanmang.

            </h1>
            <form action="11.php" method="POST">
                <input type="string" placeholder="1,2,3,4,5,6,7" name="a"> <label for="">Masiv elmetmetlarni vergul bilan ajrating</label> <br><br>
                <input type="number" name="k" placeholder="k" id="">
                <button type="submit">ok </button>
            </form>

</body>

</html>

<?php
if ($_POST) {
    $a =  $_POST["a"];
    $k =  $_POST["k"];
    $arr = explode(",", $a);
    foreach ($arr as $element) {
        if (!is_numeric($element)) {
            die("faqatsonlar dan iborat bo'lishi kerak so'zlar ishlatilmaslig kerak va beliglar ham faqat gian ramqa  va vergul ");
        } else {
        }
    }
    $n = count($arr);
    if ($k < 1 || $k > (int)($arr[$n - 1])) {
        die("K ni qiymati 1 dan katta yoki teng va " . (int)($arr[$n - 1]) . " dan  kichik yoki teng bo'lishi kerak");
    }
    for ($i = $k - 1; $i < $n; $i += $k) {
        echo $arr[$i] . "  ,  ";
    }
}
?>