<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>O‘yin kartalarining mastlari quyidagicha raqamlangan: 1 — g‘isht, 2 — chayqal, 3 — olmos, 4 — yurak. Qiymati esa quyidagicha: 11 — valeti, 12 — dacha, 13 — qirol, 14 — tuz. Ikki butun son N (6 ≤ N ≤ 14) — karta qiymati va M (1 ≤ M ≤ 4) — masti berilgan. Ushbu kartaning to‘liq nomini chiqarish (masalan, «olmosning olti», «yurakning tuzi» va h.k.).</h1>
    <form action="15.php" method="POST">
        <input type="number" , placeholder="Masti" name='a'>
        <input type="number" , placeholder="Qiymati" name='b'>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {

    $num = (int) $_POST['a'];
    $num2 = (int) $_POST['b'];
    if ($num < 1 || 4 < $num) {
        die("Masti 1 dan 4 ga cha oralida bo'lishi kerak");
    }
    if ($num2 < 6 || 14 < $num2) {
        die("Qiymati 6 dan 14 ga cha oralida bo'lishi kerak");
    }

    $a = '';
    $b = '';
    switch ($num) {
        case 1:
            $a = "g‘isht";
            break;
        case 2:
            $a = "chayqal";
            break;
        case 3:
            $a = "olmos";
            break;
        case 4:
            $a = "yurak";
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
        case 10:
            $b = "o'n";
            break;
        case 11;
            $b = "valeti";
            break;
        case 12;
            $b = "dacha";
            break;
        case 13;
            $b = "qirol";
            break;
        case 14;
            $b = "tuz";
            break;
        default:
            $b = "xato";
    }

    echo $a . "ning " . $b;
}


?>