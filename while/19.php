<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun musbat son N (> 0). Bo'lish va qoldiq olish amallaridan foydalanib, ushbu sonni teskari o'qishda qanday bo'lishini aniqlang.
    </h1>
    <form action="19.php" method="POST">
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
    while ($b > 0) {
        $c = $b % 10;
        echo $c . "<br>";
        $b = (int)($b - $c) / 10;
    }
}
?>