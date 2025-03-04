<?php
if ($_POST) {

    if ($_POST['a']) {
        $num = $_POST['a'];
        if (100 <= $num && $num <= 999) {
            $yuz = (int)($num / 100);
            $onlik = (int)(($num - $yuz * 100) / 10);
            $birlik = $num % ($yuz * 100 + $onlik * 10);
            $y = $yuz * 100 + $onlik  + $birlik * 10;

            echo "sonning o‘nlik va birlik raqamlari o‘rin almashishi = " . $y . "<br>";
        } else {
            echo 'Berilgan qiymat 3 honali bo\'lishi kerak';
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
    <form action="16.php" method="POST">
        <input type="number" , placeholder="uch honali son" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>