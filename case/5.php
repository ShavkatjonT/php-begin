<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Arifmetik amallar quyidagicha raqamlangan: 1 — qo‘shish, 2 — ayirish, 3 — ko‘paytirish, 4 — bo‘lish. Butun son N (1–4 oralig‘ida) va A hamda B haqiqiy sonlari berilgan (B ≠ 0). Ushbu amallarni bajarib natijani chiqarish.</h1>
    <form action="5.php" method="POST">
        <input type="number" , placeholder="Arifmetik amal raqami" name='k'>
        <input type="number" , placeholder="A" name='a'>
        <input type="number" , placeholder="B" name='b'>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $a = (int) $_POST['a'];
    $b = (int) $_POST['b'];
    $ar = (int) $_POST['k'];

    if ($b == 0) {
        die("B ni qiymat nolga teng bo'lmasligi kerak");
    }

    switch ($ar) {
        case 1:
            echo $a + $b;
            break;
        case 2:
            echo $a - $b;
            break;
        case 3:
            echo $a * $b;
            break;
        case 4:
            echo $a / $b;
            break;
        default:
            echo "bunday arifmetik amallar  mavjud emas";
    }
}


?>