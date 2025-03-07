<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Aylana elementlari quyidagicha raqamlangan: 1 — radius R, 2 — diametr D = 2·R, 3 — uzunlik L = 2·π·R, 4 — aylana yuzasi S = π·R². Ushbu elementlardan birining raqami va qiymati berilgan. Qolgan elementlarning qiymatini hisoblab chiqarish (π = 3.14 deb olingan).</h1>
    <form action="12.php" method="POST">
        <select name="sel" id="metricUnits">
            <option value="">Tanlang</option>
            <option value="1">1 — radius </option>
            <option value="2">2 — diametr</option>
            <option value="3">3 — uzunlik</option>
            <option value="4">4 — aylana yuzasi</option>
        </select>
        <input type="number" name="a" id="">
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $sel = (int) $_POST['sel'];
    $a = (int) $_POST['a'];
    $p = 3.14;
    switch ($sel) {
        case 1:
            echo "radius: " . $a .
                "<br>" .  "Diameter: " .  2 * $a .
                "<br>" .  "Uzunlik: " .  2 * $a * $p .
                "<br>" .  "Yuza: " .    $p * ($a ** 2);
            break;
        case 2:
            echo "radius: " . $a / 2 .
                "<br>" .  "Diameter: " .  $a .
                "<br>" .  "Uzunlik: " .  $a * $p .
                "<br>" .  "Yuza: " .    $p * (($a / 2) ** 2);
            break;
        case 3:
            echo "radius: " . $a / (2 * $p) .
                "<br>" .  "Diameter: " .  2 * ($a / (2 * $p)) .
                "<br>" .  "Uzunlik: " .  $a .
                "<br>" .  "Yuza: " .    $p * (($a / (2 * $p)) ** 2);
            break;
        case 4:
            echo "radius: " . sqrt($a / $p) .
                "<br>" .  "Diameter: " .  2 * (sqrt($a / $p)) .
                "<br>" .  "Uzunlik: " .  2 * (sqrt($a / $p)) * $p .
                "<br>" .  "Yuza: " .  $a;
            break;

        default:
            echo "Qiymatni tanlang";
            break;
    }
}


?>