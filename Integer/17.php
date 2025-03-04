<?php
if ($_POST) {
    if ($_POST['a']) {
        $num = $_POST['a'];
        if ($num > 999) {
            echo ($num / 100) % 10;
        } else {
            echo 'Berilgan qiymat 999 dan katta bo\'lishi kerak';
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
    <form action="17.php" method="POST">
        <input type="number" , placeholder="uch honalidan katta son" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>