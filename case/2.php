<?php
if ($_POST) {

    $num = (int) $_POST['a'];

    switch ($num) {
        case 1:
            echo "yomon";
            break;
        case 2:
            echo "qoniqarsiz";
            break;
        case 3:
            echo "qoniqarli";
            break;
        case 4:
            echo "yaxshi";
            break;
        case 5:
            echo "a’lo";
            break;
        default:
            echo "xato";
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
    <h1>Butun son K berilgan. Ushbu songa mos keladigan baho tavsifini chiqarish</h1>
    <form action="2.php" method="POST">
        <input type="number" , placeholder="baxoni kiring" name='a'>
        <button type="submit">ok </button>
    </form>





</body>

</html>