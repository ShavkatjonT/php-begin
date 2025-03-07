<?php
if ($_POST) {
    $num = (int) $_POST['a'];
    switch ($num) {
        case 1:
        case 2:
        case 12:
            echo "Qish";
            break;
        case 3:
        case 4:
        case 5:
            echo "bahor";
            break;
        case 6:
        case 7:
        case 8:
            echo "yoz";
            break;
        case 9:
        case 10:
        case 11:
            echo "kuz";
            break;
        default:
            echo "bunday oy mavjud emas";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Oyning tartib raqami — 1–12 oralig‘idagi butun son berilgan (1 — yanvar, 2 — fevral va h.k.). Ushbu oyga mos keladigan fasl nomini chiqarish («qish», «bahor», «yoz», «kuz»).</h1>
    <form action="3.php" method="POST">
        <input type="number" , placeholder="oy raqamni kiting" name='a'>
        <button type="submit">ok </button>
    </form>





</body>

</html>