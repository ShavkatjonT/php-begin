<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Ikkita butun son A va B berilgan (A < B). A dan B gacha bo‘lgan barcha butun sonlarning kvadratlari yig‘indisini topish.
            </h1>
            <form action="9.php" method="POST">
                <input type="number" , placeholder="A" name='a'>
                <input type="number" , placeholder="B" name='b'>
                <button type="submit">ok </button>
            </form>
</body>

</html>

<?php
if ($_POST) {
    $a = (int)  $_POST['a'];
    $b = (int)  $_POST['b'];
    if ($a >= $b) {
        die("A ni qiymati B dan kichik bo'lishi kerak");
    }
    $n = 0;
    for ($i = $a; $i <= $b; $i++) {
        $n = $n + ($i ** 2);
    }
    echo "natija " .  $n;
}
?>