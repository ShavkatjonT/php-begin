<?php
if ($_POST) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    if ($a > 2 && $b <= 3) {
        echo "Qiymatlar to'ri kiritildi a= " . $a . " b=" . $b;
    } else {
        echo "A ni qiymati 2 dan katta bo'lishi kerak va B ni qiymati 3 teng yoki undan kichik bo'lishi kerak a= " . $a . " b=" . $b;
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