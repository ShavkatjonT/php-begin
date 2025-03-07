<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        20–69 oralig‘idagi butun son berilgan, bu yoshni bildiradi. Berilgan yoshni to‘g‘ri yozilgan matn ko‘rinishida chiqarish (masalan, 20 — «yigirma yosh», 32 — «o‘ttiz ikki yosh», 41 — «qirq bir yosh»).
    </h1>
    <form action="16.php" method="POST">
        <input type="number" , placeholder="yosh kitiring" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {

    $ar = (int) $_POST['a'];

    if ($ar < 20 || 69 < $ar) {
        die("Yosh 20 dan 69 ga cha oraliqda bo'lishi kerak");
    }
    $num = ($ar - ($ar % 10)) / 10;
    $num2 = $ar % 10;

    $a = '';
    $b = '';
    switch ($num) {
        case 2:
            $a = "Yigirma";
            break;
        case 3:
            $a = "O'tiz";
            break;
        case 4:
            $a = "Qiriq";
            break;
        case 5:
            $a = "Elilk";
            break;
        case 6:
            $a = "Oltimish";
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