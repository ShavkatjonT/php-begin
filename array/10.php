<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Massiv 10 . N o'lchamli butun sonli massiv berilgan . Birinchidan, berilgan massivdagi barcha juft raqamlarni indekslarining o'sish tartibida, keyin esa barcha toq raqamlarni indekslarining kamayish tartibida chiqaring.


    </h1>
    <form action="10.php" method="POST">
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
        }
    }

    $counter = 0;
    $toq = [];
    $juft = [];

    foreach ($arr as $index => $value) {
        if ($value % 2 != 0) {
            $toq[] = "index: $index, value: $value" . "<br>";
        } else {
            $juft[] = "index: $index, value: $value" . "<br>";
        }
    }
    echo "juft son" . "<br>";
    for ($i = 0; $i < count($juft); $i++) {
        echo $juft[$i];
    }

    echo "toq son" . "<br>";

    for ($i = count($toq); $i > 0;) {
        --$i;
        echo $toq[$i];
    }

    echo "jami= " . $counter;
}
?>