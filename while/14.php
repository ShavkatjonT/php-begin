<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan A (> 1). 1 + 1/2 + … + 1/K yig'indisi A dan kichik bo'ladigan eng katta butun son K ni toping va yig'indining o'zini chiqaring.

    </h1>
    <form action="14.php" method="POST">
        <input type="number" , placeholder="N" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $a = (int)  $_POST['a'];
    if ($a <= 1) {
        die("N ni qiymati 1 dan katta  bo'lishi kerak");
    }
    $k = 1;
    $b = 0;
    while ($b < $a) {
        $b += (1 / $k);
        $k += 1;
    }

    $k -= 1;
    $b = $b - (1 / $k);


    echo $b . " ga teng";
}
?>