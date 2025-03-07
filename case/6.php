<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Uzunlik birliklari quyidagicha raqamlangan: 1 — desimetr, 2 — kilometr, 3 — metr, 4 — millimetr, 5 — santimetr. Uzunlik birligi raqami (1–5 oralig‘idagi butun son) va ushbu birlikdagi uzunlik (haqiqiy son) berilgan. Uzunlikni metrlarda hisoblash.</h1>
    <form action="6.php" method="POST">
        <select name="sel" id="metricUnits">
            <option value="">Tanlang</option>
            <option value="1">1 — desimetr</option>
            <option value="2">2 — kilometr</option>
            <option value="3">3 — metr</option>
            <option value="4">4 — millimetr</option>
            <option value="5">5 — santimetr</option>
        </select>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $sel = (int) $_POST['sel'];
    switch ($sel) {
        case 1:
            echo 0.1 . " m";
            break;
        case 2:
            echo 1000 . " m";
            break;
        case 3:
            echo 1 . " m";
            break;
        case 4:
            echo 0.001 . " m";
            break;
        case 5:
            echo 0.01 . " m";
            break;
        default:
            echo "Qiymatni tanlang";
    }
}


?>