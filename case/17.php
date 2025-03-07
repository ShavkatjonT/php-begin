<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        10–40 oralig‘idagi butun son berilgan, bu o‘quv mashqlarining sonini bildiradi. Ushbu sonni to‘g‘ri mos keluvchi so‘z bilan chiqarish (masalan, 18 — «o‘n sakkiz o‘quv mashg‘uloti», 23 — «yigirma uchta o‘quv mashg‘uloti»).
    </h1>
    <form action="17.php" method="POST">
        <input type="number" , placeholder="yosh kitiring" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {

    $ar = (int) $_POST['a'];

    if ($ar < 10 || 40 < $ar) {
        die("Yosh 20 dan 69 ga cha oraliqda bo'lishi kerak");
    }
    $num = ($ar - ($ar % 10)) / 10;
    $num2 = $ar % 10;

    $a = '';
    $b = '';
    switch ($num) {
        case 2:
            $a = "O'n";
            break;
        case 2:
            $a = "Yigirma";
            break;
        case 3:
            $a = "O'tiz";
            break;
        case 4:
            $a = "Qiriq";
            break;
        default:
            $a = "xato";
    }

    switch ($num2) {
        case 6:
            $b = "olti";
            break;
        case 7:
            $b = "yetti";
            break;
        case 8:
            $b = "sakkiz";
            break;
        case 9:
            $b = "to'qiqz";
            break;
        case 1;
            $b = "bir";
            break;
        case 2;
            $b = "ikki";
            break;
        case 3;
            $b = "uch";
            break;
        case 4;
            $b = "to'rt";
            break;
        case 5;
            $b = "besh";
            break;
        default:
            $b = "";
    }

    echo $a . " " . $b . " yosh";
}


?>