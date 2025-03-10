<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun sonlar A va B (A < B). A dan B gacha bo‘lgan barcha butun sonlarni chiqarish; bunda A soni 1 marta, A + 1 soni 2 marta va hokazo chiqarilishi kerak.
         <form action="40.php" method="POST">
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
        $c = $i - $a + 1;
        for ($r = 1; $r <= $c; $r++) {
            echo $i . " , ";
        }
    }
}
?>