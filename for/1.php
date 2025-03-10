<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun sonlar K va N (N > 0). K sonini N marta chiqarish.
    </h1>
    <form action="1.php" method="POST">
        <input type="number" , placeholder="K" name='a'>
        <input type="number" , placeholder="N" name='b'>
        <button type="submit">ok </button>
    </form>
</body>

</html>

<?php
if ($_POST) {
    $k = (int)  $_POST['a'];
    $n = (int)  $_POST['b'];
    if ($n <= 0) {
        die("N soni noldan katta bo'lishi kerak");
    }

    for ($i = $n; $i > 0; $i--) {
        echo "<h1> " . $k .  "</h1>";
    }
}
?>