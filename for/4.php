<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Haqiqiy son berilgan — 1 kg konfetning narxi. 1, 2, …, 10 kg konfetning narxini chiqarish.
    </h1>
    <form action="4.php" method="POST">
        <input type="number" , placeholder="summa" name='a'>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $a = (int)  $_POST['a'];
    if ($a < 0) {
        die("Summani manfi bo'lmaydi");
    }

    for ($i =  1; $i <= 10; $i++) {
        echo "<h1 style='color:red' > " . $i . " kg konfent " . $i * $a . " so'm bo'ladi </h1>";
    }
}
?>