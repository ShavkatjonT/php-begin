<?php
if ($_POST) {
    $num = (int) $_POST['a'];
    switch ($num) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            echo "31 kun";
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            echo "30 kun";
            break;
        case 2:
            echo "28 kun yoki 4 yilda bir 29 kun";
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
    <h1>Oyning tartib raqami — 1–12 oralig‘idagi butun son berilgan (1 — yanvar, 2 — fevral va h.k.). Berilgan oyda kabisa bo‘lmagan yilda nechta kun borligini aniqlash.</h1>
    <form action="4.php" method="POST">
        <input type="number" , placeholder="oy raqamni kiting" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>