<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Kun (D) va oy (M) butun sonlari berilgan. Ushbu sanaga mos keluvchi burj belgisi nomini aniqlash (masalan, 21-mart — «Qo‘y», 22-iyun — «Qisqichbaqa»).
    </h1>
    <form action="20.php" method="POST">
        <input type="number" placeholder="oy" name="a" id="">
        <input type="number" placeholder="kun" name="b" id="">
        <button type="submit">ok</button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $m = (int) $_POST['a'];
    $d = (int) $_POST['b'];
    if (1 > $m || 12 < $m) {
        die("Oy ni to'g'ri kiring");
    }
    if (1 > $d || 31 < $d) {
        die("Kun ni to'g'ri kiring");
    }
    if ($m == 2 && $d > 29) {
        die("Bu oyda bunday sana mavjud emas");
    }
    $a = '';
    $b = '';
    switch ($m) {
        case 1:
            $a = 'yanvar';
            break;
        case 2:
            $a = 'fevral ';
            break;
        case 3:
            $a = 'mart';
            break;
        case 4:
            $a = 'aprel';
            break;
        case 5:
            $a = 'may';
            break;
        case 6:
            $a = 'iyun';
            break;
        case 7:
            $a = 'iyul';
            break;
        case 8:
            $a = 'avgust';
            break;
        case 9:
            $a = 'sentabr';
            break;
        case 10:
            $a = 'oktabr';
            break;
        case 11:
            $a = 'noyabr';
            break;
        case 12:
            $a = 'dekabr';
            break;
    }

    switch ($d) {
        case ((($m == 3 && $d >= 21) || ($m == 4 && $d <= 19))):
            $b = 'Qo‘y ';
            break;
        case ((($m == 4 && $d >= 20) || ($m == 5 && $d <= 20))):
            $b = 'Buzoq  ';
            break;
        case ((($m == 5 && $d >= 21) || ($m == 6 && $d <= 20))):
            $b = 'Egizaklar ';
            break;
        case ((($m == 6 && $d >= 21) || ($m == 7 && $d <= 22))):
            $b = 'Qisqichbaqa ';
            break;
        case ((($m == 7 && $d >= 23) || ($m == 8 && $d <= 22))):
            $b = 'Arslon ';
            break;
        case ((($m == 8 && $d >= 23) || ($m == 9 && $d <= 22))):
            $b = 'Parizod ';
            break;
        case ((($m == 9 && $d >= 23) || ($m == 10 && $d <= 22))):
            $b = 'Tarozi ';
            break;
        case ((($m == 10 && $d >= 23) || ($m == 11 && $d <= 21))):
            $b = 'Chayon ';
            break;
        case ((($m == 11 && $d >= 22) || ($m == 12 && $d <= 21))):
            $b = 'O‘qotar ';
            break;
        case ((($m == 12 && $d >= 22) || ($m == 1 && $d <= 19))):
            $b = 'Echki ';
            break;
        case ((($m == 1 && $d >= 20) || ($m == 2 && $d <= 18))):
            $b = 'Qovg‘a ';
            break;
        case ((($m == 2 && $d >= 19) || ($m == 3 && $d <= 20))):
            $b = 'Baliq ';
            break;
    }

    echo $d . "-" . $a . " — « " . $b . " »";
}


?>