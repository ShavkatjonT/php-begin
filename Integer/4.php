<?php
if ($_POST) {
    if ($_POST['a'] && $_POST['b']) {
        $a =  $_POST['a'];
        $b =  $_POST['b'];
        if ($a > $b && $b > 0) {
            $num1 = (int)($a / $b);
            echo "kesmlarda = " . $num1;
        } else {
            if ($a <= $b) {
                echo 'A katta bo\'lishi kerak b dan';
            } else {
                echo 'A va B musbat son bo\'lishi kerak';
            }
        }
    } else {
        echo "inputlarga qiymat kiriting";
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
    <form action="4.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'>

        <button type="submit">ok </button>
    </form>
</body>

</html>