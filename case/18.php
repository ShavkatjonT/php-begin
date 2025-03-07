<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        100–999 oralig‘idagi butun son berilgan. Ushbu sonning matnli tavsifini chiqarish (masalan, 256 — «ikki yuz ellik olti», 814 — «sakkiz yuz o‘n to‘rt»).
    </h1>
    <form action="18.php" method="POST">
        <input type="number" , placeholder="qiymatni kitiring" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $ar = (int) $_POST['a'];
    if ($ar < 100 || 999 < $ar) {
        die("100 dan 999 ga cha oraliqda bo'lishi kerak");
    }
    $num1 = ($ar - ($ar % 100)) / 100;
    $num = (($ar - ($num1 * 100)) - (($ar - ($num1 * 100)) % 10)) / 10;
    $num2 = ($ar - ($num1 * 100)) % 10;
    $a = '';
    $c = '';
    $b = '';
    switch ($num1) {
        case 1:
            $c = $num == 0 && $num2 == 0  ? "Yuz" :  "Bir yuz";
            break;
        case 2:
            $c = "Ikki yuz";
            break;
        case 3:
            $c = "Uch yuz";
            break;
        case 4:
            $c = "To'rt yuz";
            break;
        case 5:
            $c = "Besh yuz";
            break;
        case 6:
            $c = "Olti yuz";
            break;
        case 7:
            $c = "Yetti yuz";
            break;
        case 8:
            $c = "Sakkiz yuz";
            break;
        case 9:
            $c = "To'qiz yuz";
            break;
        default:
            $c = "";
            break;
    }
    switch ($num) {
        case 1:
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
        case 5:
            $a = "Elik";
            break;
        case 6:
            $a = "Oltimish";
            break;
        case 7:
            $a = "Yetmish";
            break;
        case 8:
            $a = "Sakson";
            break;
        case 9:
            $a = "To'qson";
            break;
        default:
            $a = "";
            break;
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
    echo $c . " " . $a . " " . $b . " ";
}


?>