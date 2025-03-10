<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun musbat son N (> 0). Agar u 3 ning darajasi bo'lsa, True, aks holda False chiqaring. </h1>
    <form action="4.php" method="POST">
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
    while ($a % 3 == 0) {
        $a = $a / 3;
    }

    echo $a == 1 ? "true" : "false";
}
?>