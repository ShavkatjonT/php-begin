<?php
if ($_POST) {

    if ($_POST['a'] && $_POST['b']) {
        $num = $_POST['a'];
        $b = $_POST['b'];
        if (1 <= $num && 365 >= $num && 1 <= $b && 7 >= $b) {
            $firstday = 1;
            $day = (($b + ($num - 1)) % 7);

            switch ($day) {
                case 1:
                    echo "dushanba 1";
                    break;
                case 2:
                    echo "seyshanba 2 ";
                    break;
                case 3:
                    echo "chorshanba 3 ";
                    break;
                case 4:
                    echo "payshanba 4 ";
                    break;
                case 5:
                    echo "juma 5";
                    break;
                case 6:
                    echo "shanba 6";
                    break;
                case 7 || 0:
                    echo "yakshanba 7";
                    break;
            }
        } else {
            echo  "kun  qiymat 1 dan boshlab 365 gacha bo'lgan sonlar oralig'ida bo'lsin  " . '<br>' . "hafta kuni 1 dan 7 gacha oraliqda ";
        }
    } else {
        echo "inputga qiymat kiriting";
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
    <form action="28.php" method="POST">
        <input type="number" , placeholder="kun" name='a'>
        <input type="number" , placeholder="hafta" name='b'>
        <button type="submit">ok </button>
    </form>
</body>

</html>