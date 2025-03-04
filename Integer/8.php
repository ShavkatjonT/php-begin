<?php
if ($_POST) {

    if ($_POST['a']) {
        $num = $_POST['a'];
        if (10 <= $num && $num <= 99) {
            $butun = (int)($num / 10);
            $qoldiq = $num % ($butun * 10);
            $y = $butun + $qoldiq * 10;


            echo "O'rinlarni almashtirish = " . $y;
        } else {
            echo 'Berilgan qiymat 2 honali bo\'lishi kerak';
        }
    } else {
        echo "inputga qiymat kiriting";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="8.php" method="POST">
        <input type="number" , placeholder="ikki honali son" name='a'>
        <button type="submit">ok </button>
    </form>





</body>

</html>