<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Kun (D) va oy (M) butun sonlari berilgan, ular kabisa bo‘lmagan yilning to‘g‘ri sanasini belgilaydi. Ushbu sanadan keyingi kun va oy qiymatlarini chiqarish.</h1>
    <form action="9.php" method="POST">
        <input type="number" , placeholder="Oy" name='a'>
        <input type="number" , placeholder="Kun" name='b'>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $ar = (int) $_POST['a'];
    $b = (int) $_POST['b'];
    $a = $ar;
    if ($b <= 0 || 31 < $b) {
        die("B ni qiymat nolga teng yoki unda kichik yoki 31 dan katta bo'lmaslig kerak");
    }
    if ($a == 2 && $b >= 29) {
        die("Bu oy bunday sanani kiritish mumkun emas");
    }

    switch ($ar) {
        case 12:
            if (31 == $b) {
                echo "1 kun , 1 oy ";
            } else {
                echo  ++$b . " kun " . $a . " oy ";
            }
            break;
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
            if (31 == $b) {
                echo "1 kun , " . ++$a . " oy ";
            } else {
                echo  ++$b . " kun " . $a . " oy ";
            }
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            if (30 == $b) {
                echo "1 kun , " . ++$a . " oy ";
            } else {
                echo  ++$b . " kun " . $a . " oy ";
            }
            break;

        case 2:
            if (28 == $b) {
                echo "1 kun , " . ++$a . " oy ";
            } else {
                echo  ++$b . " kun " . $a . " oy ";
            }
            break;

        default:
            echo "Bunday oy mavjud emas";
    }
}


?>