<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N o‘lchamli A massivi berilgan. Xuddi shu o‘lchamdagi yangi B massivi quyidagi qoida asosida shakllantirilsin:

        Agar AK < 5 bo‘lsa, BK=2 · AK
            Aks holda, BK=AK / 2








            </h1>

            <form action="52.php" method="POST">
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
    for ($i = 0; $i <= $n - 1; $i++) {
        if ((int)($arr[$i]) < 5) {
            $arr2[$i] = 2 * (int)($arr[$i]);
        } else {
            $arr2[$i] = (int)($arr[$i]) / 2;
        }
    }

    echo "<br>B massiv <br>";
    echo json_encode($arr2);
}
?>