<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun musbat sonlar A va B (A < B). A dan B gacha bo‘lgan barcha butun sonlarni chiqarish; bunda har bir son o‘zining qiymatiga teng miqdorda chiqarilishi kerak (masalan, 3 soni 3 marta chiqariladi). </h1>
            <form action="39.php" method="POST">
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
    for ($i = $a; $i <= $b; $i++) {
        for ($r = 1; $r <= $i; $r++) {
            echo $i . " , ";
        }
    }
}
?>