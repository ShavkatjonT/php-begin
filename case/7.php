<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Og‘irlik birliklari quyidagicha raqamlangan: 1 — kilogramm, 2 — milligramm, 3 — gramm, 4 — tonna, 5 — sentner. Og‘irlik birligi raqami (1–5 oralig‘idagi butun son) va ushbu birlikdagi massa (haqiqiy son) berilgan. Massani kilogrammlarda hisoblash.</h1>
    <form action="7.php" method="POST">
        <input type="number" name="sel">
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $sel = (int) $_POST['sel'];
    switch ($sel) {
        case 1:
            echo 1 . " kg";
            break;
        case 2:
            echo 0.000001 . " kg";
            break;
        case 3:
            echo 0.001 . " kg";
            break;
        case 4:
            echo 1000 . " kg";
            break;
        case 5:
            echo 100 . " kg";
            break;
        default:
            echo "qiymatni talang  ";
    }
}


?>