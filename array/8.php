<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N o'lchamli butun sonli massiv berilgan . Berilgan massivdagi barcha toq raqamlarni indekslarining o‘sish tartibida hamda ularning K miqdorini chiqaring.

    </h1>
    <form action="8.php" method="POST">
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

    $count = 0;
    $oddNumbers = [];

    foreach ($arr as $index => $value) {
        if ($value % 2 != 0) {
            $oddNumbers[] = "i: $index, q: $value" . "<br>";
            $count++;
        }
    }

    foreach ($oddNumbers as $odd) {
        echo $odd . "\n";
    }
    echo "jami= " . $count;
}
?>