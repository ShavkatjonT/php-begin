<?php
if ($_POST) {

    if ($_POST['a']) {
        $num = $_POST['a'];
        if (1 <= $num && 365 >= $num) {
            $firstday = 1;
            $day = $num % 7;

            switch ($day) {
                case 1:
                    echo "seyshanba";
                    break;
                case 2:
                    echo "chorshanba";
                    break;
                case 3:
                    echo "payshanba";
                    break;
                case 4:
                    echo " juma";
                    break;
                case 5:
                    echo " shanba ";
                    break;
                case 6:
                    echo "yakshanba";
                    break;
                case 0:
                    echo "dushanba";
                    break;
            }
        } else {
            echo "qiymat 1 dan boshlab 365 gacha bo'lgan sonlar oralig'ida bo'lsin";
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
    <form action="26.php" method="POST">
        <input type="number" , placeholder="kun" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>