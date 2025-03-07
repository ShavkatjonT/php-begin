<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Teng tomonli uchburchak elementlari quyidagicha raqamlangan: 1 — tomon a, 2 — ichki aylana radiusi R1 (R1 = a√3/6), 3 — tashqi aylana radiusi R2 (R2 = 2·R1), 4 — yuzasi S = a²√3/4. Ushbu elementlardan birining raqami va qiymati berilgan. Qolgan elementlarning qiymatini hisoblab chiqarish.
    </h1>
    <form action="14.php" method="POST">
        <select name="sel" id="metricUnits">
            <option value="">Tanlang</option>
            <option value="1">1 — tomon </option>
            <option value="2">2 — ichki aylana radiusi </option>
            <option value="3">3 — tashqi aylana radiusi </option>
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
            echo "tomon : " . $a .
                "<br>" .  "ichki aylana radiusi : " .  (sqrt(3) * $a) / 6 .
                "<br>" .  "tashqi aylana radiusi : " .  (sqrt(3) * $a) / 3 .
                "<br>" .  "Yuza: " .   (($a ** 2) * sqrt(3)) / 4;
            break;
        case 2:
            echo "tomon : " .   2 * $a * sqrt(3) .
                "<br>" .  "ichki aylana radiusi : " .  $a .
                "<br>" .  "tashqi aylana radiusi : " .  $a * 2 .
                "<br>" .  "Yuza: " . 3 * ($a ** 2) * sqrt(3);
            break;
        case 3:
            echo "tomon : " .  $a  * sqrt(3) .
                "<br>" .  "ichki aylana radiusi : " .   $a / 2 .
                "<br>" .  "tashqi aylana radiusi : " .  $a .
                "<br>" .  "Yuza: " . (3 * sqrt(3) * ($a ** 2)) / 4;
            break;
        case 4:
            echo "tomon : " . sqrt((4 * $a) / sqrt(3)) .
                "<br>" .  "ichki aylana radiusi : " .  sqrt(4 * $a * sqrt(3)) / 6 .
                "<br>" .  "tashqi aylana radiusi : " .  sqrt(4 * $a * sqrt(3)) / 3 .
                "<br>" .  "Yuza: " .  $a;
            break;

        default:
            echo "Qiymatni tanlang";
            break;
    }
}


?>