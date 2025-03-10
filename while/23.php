<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun musbat sonlar A va B. Evklid algoritmidan foydalanib, ularning eng katta umumiy bo'luvchisini (EKUB) toping:
        EKUB(A, B) = EKUB(B, A mod B), agar B ≠ 0;
        EKUB(A, 0) = A.
        <form action="23.php" method="POST">
            <input type="number" , placeholder="a" name='a'>
            <input type="number" , placeholder="b" name='b'>
            <button type="submit">ok </button>
        </form>
</body>

</html>
<?php
if ($_POST) {
    $a = (int)  $_POST['a'];
    $b = (int)  $_POST['b'];
    if ($b == 0) {
        $eb = $a;
    } else {
        while ($b != 0) {
            $r = $b;
            $b = $a % $b;
            $a = $r;
        }
        $eb = $a;
    }

    echo $eb;
}
?>