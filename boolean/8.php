<?php
if ($_POST) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    if ($a % 2 && $b % 2) {
        echo "Qiymatlar to'ri kiritildi a= " . $a . " b=" . $b;
    } else {
        echo "A va B ni qiymati toq son bo'lishi kerak a= " . $a . " b=" . $b;
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
    <form action="8.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'>
        <button type="submit">ok </button>
    </form>
</body>

</html>