<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        N (> 0) butun soni berilgan . Birinchidan N- gacha boʻlgan ikki darajali darajali N oʻlchamdagi butun son massivini yarating va chiqaring : 2, 4, 8, 16, …
    </h1>
    <form action="2.php" method="POST">
        <input type="number" placeholder="N" name="a"> <br><br>

        <button type="submit">ok </button>
    </form>





</body>

</html>

<?php
if ($_POST) {
    $a = $_POST["a"];
    if ($a <= 0) {
        die("n ni qiymati no'ldan katta bo'lishi kerak ");
    }

    $ar = array();
    for ($i = 1; $i <= $a; $i++) {
        array_push($ar, 2 ** $i);
    }
    echo json_encode($ar);
}
?>