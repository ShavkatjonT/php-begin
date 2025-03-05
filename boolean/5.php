<?php
if ($_POST) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    if ($a >= 0 || $b < -2) {
        echo "Qiymatlar to'ri kiritildi";
    } else {
        echo "A ni qiymati 0 teng yoki undan katta bo'lishi kerak yoki  B ni qiymati -2  kichik bo'lishi kerak";
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
    <form action="5.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'>
        <button type="submit">ok </button>
    </form>
</body>

</html>