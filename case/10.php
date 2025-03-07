<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Robot to‘rt yo‘nalishda harakatlana oladi («C» — shimol, «W» — g‘arb, «Y» — janub, «E» — sharq) va uch xil raqamli buyruqni qabul qiladi: 0 — harakatni davom ettirish, 1 — chapga burilish, -1 — o‘ngga burilish. Robotning boshlang‘ich yo‘nalishi C va N — unga yuborilgan buyruq berilgan. Buyruq bajarilgandan keyin robotning yo‘nalishini aniqlash.
    </h1>
    <form action="10.php" method="POST">
        <input type="text" name="y" placeholder="yo'nalish" id="">
        <input type="number" name="h" placeholder="harakat" id="">
        <button type="submit">ok</button>
    </form>


</body>

</html>

<?php

if ($_POST) {
    $y = $_POST['y'];
    $h = (int) $_POST['h'];
    if (!$y || ($y != "C" && $y && $y != "Y" && $y != "W" && $y != "E")) {
        die("Yo'nalish to'g'ri kiriting");
    }
    if ($h != 0 && $h != -1 && $h != 1) {
        die("harakatni to'g'ri kiriting");
    }
    switch ($y) {
        case "C":
            switch ($h) {
                case 1:
                    echo "Sharq ga";
                    break;
                case -1:
                    echo "G'arpga";
                    break;
                case 0:
                    echo "Shimol ga";
                    break;
            }
            break;
        case "W":
            switch ($h) {
                case 1:
                    echo "Janub ga";
                    break;
                case -1:
                    echo "Shimol ga";
                    break;
                case 0:
                    echo "G'arpga";
                    break;
            }
            break;
        case "Y":
            switch ($h) {
                case 1:
                    echo "Sharq ga";
                    break;
                case -1:
                    echo "G'arpga";
                    break;
                case 0:
                    echo "Janub ga";
                    break;
            }
            echo "Janub";
            break;
        case "E":
            switch ($h) {
                case 1:
                    echo "Shimol ga";
                    break;
                case -1:
                    echo "Janub ga";
                    break;
                case 0:
                    echo "Sharq ga";
                    break;
            }
            break;
        default:
            echo "Bunday yo'nalish mumkun emas";
            break;
    }
}

?>