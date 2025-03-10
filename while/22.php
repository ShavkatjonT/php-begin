<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun musbat son N (> 1). Agar u tub son bo'lsa, True, aks holda False chiqaring.
        <form action="22.php" method="POST">
            <input type="number" , placeholder="N" name='a'>
            <button type="submit">ok </button>
        </form>
</body>

</html>
<?php
if ($_POST) {
    $a = (int)  $_POST['a'];
    if ($a <= 0) {
        die("N ni qiymati musbat butuns on bo'lishi kerak ");
    }
    $b = $a;
    $arr = [];
    while ($b > 0) {
        if ($a % $b == 0) {
            array_push($arr, $b);
        }
        $b--;
    }
    if (count($arr) == 2 && $arr[0] == $a && $arr[1] == 1) {
        echo "True";
    } else {
        echo "False";
    }
}
?>