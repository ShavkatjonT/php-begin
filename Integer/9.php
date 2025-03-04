<?php
if ($_POST) {

    if ($_POST['a']) {
        $num = $_POST['a'];
        if (100 <= $num && $num <= 999) {
            $butun = (int)($num / 100);

            echo "yuzliklar xonasi = " . $butun;
        } else {
            echo 'Berilgan qiymat 3 honali bo\'lishi kerak';
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
    <form action="9.php" method="POST">
        <input type="number" , placeholder="uch honali son" name='a'>
        <button type="submit">ok </button>
    </form>





</body>

</html>