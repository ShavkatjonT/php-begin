<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun musbat son N (> 0). Bo'lish va qoldiq olish amallaridan foydalanib, uning tarkibida 2 raqami bor-yo'qligini aniqlang. Agar bo'lsa, True, aks holda False chiqaring. </h1>
    <form action="20.php" method="POST">
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
    $rs = 'false';
    while ($b > 0) {
        $c = (int) $b % 10;
        if ($c === 2) {
            $rs = "true";
        }
        $b = (int)($b - $c) / 10;
    }
    echo $rs . " <br>";
}
?>