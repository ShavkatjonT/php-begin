<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Sharqiy taqvimda 60 yillik tsikl mavjud bo‘lib, u 12 yillik kichik tsikllarga bo‘linadi. Har bir kichik tsikl beshta rang nomi bilan belgilanadi: yashil, qizil, sariq, oq, qora. Yillar esa quyidagi hayvon nomlari bilan belgilanadi: sichqon, sigir, yo‘lbars, quyon, ajdar, ilon, ot, qo‘y, maymun, tovuq, it, to‘ng‘iz. 1984 yil tsiklning boshlanishi hisoblanadi. Berilgan yildan kelib chiqib, ushbu yil qanday rang va hayvon nomiga mos kelishini aniqlash (masalan, «yashil sichqon yili»).
    </h1>
    <form action="19.php" method="POST">
        <input type="number" placeholder="yilni kiring" name="a" id="">
        <button type="submit">ok</button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $ar = (int) $_POST['a'];
    if ($ar <= 0) {
        die("Yilni to'g'ri kiring");
    }
    $r = $ar % 5;
    $h = $ar % 12;
    $a = '';
    $b = '';
    echo $h . "<br>";

    switch ($r) {
        case 4:
            $a = "yashil";
            break;
        case 0:
            $a = "qizil";
            break;
        case 1:
            $a = "sariq";
            break;
        case 2:
            $a = "oq";
            break;
        case 3:
            $a = "qora";
            break;
    }

    switch ($h) {
        case 1:
            $b = "tovuq";
            break;
        case 2:
            $b = "it";
            break;
        case 3:
            $b = "to‘ng‘iz";
            break;
        case 4:
            $b = "sichqon";
            break;
        case 5:
            $b = "sigir";
            break;
        case 6:
            $b = "yo‘lbars";
            break;
        case 7:
            $b = "quyon";
            break;
        case 8:
            $b = "ajdar";
            break;
        case 9:
            $b = "ilon";
            break;
        case 10:
            $b = "ot";
            break;
        case 11:
            $b = "qo‘y";
            break;
        case 0:
            $b = "maymun";
            break;
    }


    echo $a . " " .  $b;
}


?>