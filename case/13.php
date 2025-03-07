<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Tengburchak to‘g‘ri burchakli uchburchakning elementlari quyidagicha raqamlangan: 1 — katet a, 2 — gipotenuza c = a√2, 3 — gipotenuzaga tushirilgan balandlik h (h = c/2), 4 — yuzasi S = c·h/2. Ushbu elementlardan birining raqami va qiymati berilgan. Qolgan elementlarning qiymatini hisoblab chiqarish.
    </h1>
    <form action="13.php" method="POST">
        <select name="sel" id="metricUnits">
            <option value="">Tanlang</option>
            <option value="1">1 — katet </option>
            <option value="2">2 — gipotenuza </option>
            <option value="3">3 — balandlik </option>
            <option value="4">4 — yuzasi</option>
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
    switch ($sel) {
        case 1:
            echo "katet : " . $a .
                "<br>" .  "gipotenuza : " .  sqrt(2) * $a .
                "<br>" .  "balandlik : " .  (sqrt(2) * $a) / 2 .
                "<br>" .  "Yuza: " .   (((sqrt(2) * $a) / 2) * (sqrt(2) * $a)) / 2;
            break;
        case 2:
            echo "katet : " . $a / sqrt(2) .
                "<br>" .  "gipotenuza : " .  $a .
                "<br>" .  "balandlik : " .  $a / 2 .
                "<br>" .  "Yuza: " . ($a * ($a / 2)) / 2;
            break;
        case 3:
            echo "katet : " . 2 * $a  / sqrt(2) .
                "<br>" .  "gipotenuza : " .  2 * $a .
                "<br>" .  "balandlik : " .  $a .
                "<br>" .  "Yuza: " .  $a * $a;
            break;
        case 4:
            echo "katet : " . 2 * (sqrt($a)) / sqrt(2) .
                "<br>" .  "gipotenuza : " .  2 * (sqrt($a)) .
                "<br>" .  "balandlik : " .  sqrt($a) .
                "<br>" .  "Yuza: " .  $a;
            break;

        default:
            echo "Qiymatni tanlang";
            break;
    }
}


?>