<?php
if ($_POST) {

    $num = (int) $_POST['a'];
    if (1 <= $num && 7 >= $num) {
        switch ($num) {
            case 1:
                echo "dushanba";
                break;
            case 2:
                echo "seyshanba";
                break;
            case 3:
                echo "chorshanba";
                break;
            case 4:
                echo "payshanba";
                break;
            case 5:
                echo "juma";
                break;
            case 6:
                echo "shanba";
                break;
            case 7:
                echo "yakshanba";
                break;
        }
    } else {
        echo "qiymat 1 dan boshlab 7 gacha bo'lgan sonlar oralig'ida bo'lsin";
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
    <form action="1.php" method="POST">
        <input type="number" , placeholder="hafta kun" name='a'>
        <button type="submit">ok </button>
    </form>





</body>

</html>