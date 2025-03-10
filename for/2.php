<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Ikkita butun son A va B berilgan (A < B). A va B orasidagi barcha butun sonlarni (A va B ni ham qo‘shib) o‘sish tartibida chiqarish, shuningdek, bu sonlar sonini N topish.
            </h1>
            <form action="2.php" method="POST">
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
        $n++;
        echo "  " . $i .  " ";
    }
    echo "<br><br> <h1 style='color:red' > A va B orasida " .  $n . " ta son bor </h1>";
}
?>