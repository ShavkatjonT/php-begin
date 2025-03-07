<?php
if ($_POST) {

    $a = (int) $_POST['a'];
    if ($a > 0) {
        if ($a % 2) {
            echo 'musbat toq son';
        } else {
            echo 'musbat juft son';
        }
    } else if ($a < 0) {
        if ($a % 2) {
            echo 'manfiy toq son';
        } else {
            echo 'manfiy juft son';
        }
    } else {
        echo "nol ";
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
    <h1>Butun son berilgan. Ushbu sonning tavsifini chiqarish, masalan:
        "manfiy juft son", "nol", "musbat toq son" va hokazo.</h1>
    <form action="29.php" method="POST">
        <input type="number" , placeholder="son" name='a'>
        <button type="submit">ok </button>
    </form>





</body>

</html>