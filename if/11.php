<?php
if ($_POST) {
    $a = (int) $_POST['a'];
    $b = (int) $_POST['b'];
    if ($a == $b) {
        $a = 0;
        $b = 0;
        echo "natija a " .  $a . "  b " . $b;
    } else {
        $a = $a + 2;
        $b = $b + 2;
        echo "natija a " .  $a . " b " . $b;
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
    <h1>Agar ularning qiymatlari har xil bo‘lsa, har biriga kattaroq qiymatni tayinlash; agar teng bo‘lsa, har ikkisiga ham 0 qiymatini tayinlash. </h1>
    <form action="11.php" method="POST">
        <input type="number" , placeholder="a" name='a'>
        <input type="number" , placeholder="b" name='b'>
        <button type="submit">ok </button>
    </form>

</body>

</html>