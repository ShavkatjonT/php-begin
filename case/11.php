<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Lokator asosiy yo'nalishlardan biriga ("N" - shimolga, "W" - g'arbga, "S" - janubga, "E" - sharqqa) yo'naltirilgan va uchta raqamli burilish buyrug'ini qabul qilishi mumkin: 1 - chapga, -1 - o'ngga, 2 - 180 ° burilish. Berilgan C belgisi , lokatorning boshlang'ich yo'nalishi va N 1 va N 2 butun sonlari yuborilgan ikkita buyruq. Ushbu buyruqlarni bajargandan so'ng, lokatorning yo'nalishini chop eting.</h1>
    <form action="10.php" method="POST">
        <input type="text" name="y" placeholder="yo'nalish" id="">
        <input type="number" name="h" placeholder="harakat 1" id="">
        <input type="number" name="h2" placeholder="harakat 2" id="">
        <button type="submit">ok</button>
    </form>


</body>

</html>

<?php

if ($_POST) {
    $y = $_POST['y'];
    $h = (int) $_POST['h'];
    $h2 = (int) $_POST['h2'];
    if (!$y || ($y != "N" && $y && $y != "S" && $y != "W" && $y != "E")) {
        die("Yo'nalish to'g'ri kiriting");
    }
    if ($h != 2 && $h != -1 && $h != 1) {
        die("harakatni 1 to'g'ri kiriting");
    }
    if ($h2 != 2 && $h2 != -1 && $h2 != 1) {
        die("harakatni 1 to'g'ri kiriting");
    }


    switch ($y) {
        case "N":
            switch ($h) {
                case 1:
                    switch ($h2) {
                        case 1:
                            echo "Shimol ga";
                            break;
                        case -1:
                            echo "Janub ga";
                            break;
                        case 2:
                            echo "G'arpga ga";
                            break;
                    }
                    break;
                case -1:
                    switch ($h2) {
                        case 1:
                            echo "Janub ga";
                            break;
                        case -1:
                            echo "Shimol ga";
                            break;
                        case 2:
                            echo "Sharq ga";
                            break;
                    }

                    echo "G'arpga";
                    break;
                case 2:
                    switch ($h2) {
                        case 1:
                            echo "Sharq ga";
                            break;
                        case -1:
                            echo "G'arpga";
                            break;
                        case 2:
                            echo "Shimol ga";
                            break;
                    }

                    echo "Shimol ga";
                    break;
            }
            break;
        case "W":
            switch ($h) {
                case 1:
                    switch ($h2) {
                        case 1:
                            echo "Sharq ga";
                            break;
                        case -1:
                            echo "G'arpga";
                            break;
                        case 2:
                            echo "Shimol ga";
                            break;
                    }
                    break;
                case -1:
                    switch ($h2) {
                        case 1:
                            echo "G'arpga";
                            break;
                        case -1:
                            echo "Sharq ga";
                            break;
                        case 2:
                            echo "Janub ga";
                            break;
                    }
                    break;
                case 2:
                    switch ($h2) {
                        case 1:
                            echo "Shimol ga";
                            break;
                        case -1:
                            echo "Janub ga";
                            break;
                        case 2:
                            echo "G'arp ga";
                            break;
                    }
                    break;
            }
            break;
        case "S":
            switch ($h) {
                case 1:
                    switch ($h2) {
                        case 1:
                            echo "Shimol ga";
                            break;
                        case -1:
                            echo "Janub ga";
                            break;
                        case 2:
                            echo "Janub ga";
                            break;
                    }
                    break;
                case -1:
                    switch ($h2) {
                        case 1:
                            echo "Shimol ga";
                            break;
                        case -1:
                            echo "Janub ga";
                            break;
                        case 2:
                            echo "Sharq ga";
                            break;
                    }
                    break;

                    echo "G'arpga";
                    break;
                case 2:
                    switch ($h2) {
                        case 1:
                            echo "g'arpga ga";
                            break;
                        case -1:
                            echo "shaqrga ga";
                            break;
                        case 2:
                            echo "Shimol ga";
                            break;
                    }
                    break;
            }
            echo "Janub";
            break;
        case "E":
            switch ($h) {
                case 1:
                    switch ($h2) {
                        case 1:
                            echo "g'arpga ga";
                            break;
                        case -1:
                            echo "shaqrga ga";
                            break;
                        case 2:
                            echo "Janubga ga";
                            break;
                    }
                    break;
                case -1:
                    switch ($h2) {
                        case 1:
                            echo "Shaqrq ga";
                            break;
                        case -1:
                            echo "G'arp ga";
                            break;
                        case 2:
                            echo "Shimol ga";
                            break;
                    }
                    break;
                case 2:
                    switch ($h2) {
                        case 1:
                            echo "G'arp ga";
                            break;
                        case -1:
                            echo "Shimol ga";

                            break;
                        case 2:
                            echo "Sharq ga";

                            break;
                    }
                    break;
            }
            break;
        default:
            echo "Bunday yo'nalish mumkun emas";
            break;
    }
}

?>