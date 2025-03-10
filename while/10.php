<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Berilgan butun musbat son N (> 1). Eng katta butun son K ni toping, shundayki 3ᴷ < N.

            </h1>
            <form action="10.php" method="POST">
                <input type="number" , placeholder="N" name='a'>
                <button type="submit">ok </button>
            </form>
</body>

</html>

<?php
if ($_POST) {
    $a = (int)  $_POST['a'];
    if ($a <= 1) {
        die("N ni qiymati 1 dan katta  bo'lishi kerak");
    }
    $k = 1;
    while (3 ** $k < $a) {
        $k += 1;
    }
    $k -= 1;
    echo $k . " ga teng";
}
?>