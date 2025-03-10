<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun musbat son N (> 0). Eng kichik butun musbat son K ni toping, shundayki K² > N. Kvadrat ildiz funksiyasidan foydalanmang.
    </h1>
    <form action="7.php" method="POST">
        <input type="number" , placeholder="N" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $a = (int)  $_POST['a'];
    if ($a <= 0) {
        die("N ni qiymati musbatson bo'lishi kerak");
    }
    $k = 1;
    while ($k * $k <= $a) {
        $k += 1;
    }


    echo $k . " ga teng";
}
?>