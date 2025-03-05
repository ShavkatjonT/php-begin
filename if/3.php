<?php
if ($_POST) {

    $a = $_POST['a'];
    if ($a > 0) {
        echo "natija " .  $a + 1;
    } else if ($a < 0) {
        echo "natija " .  $a - 2;
    } else {
        echo "natija " .  $a + 10;
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
    <h1>Agar u musbat bo‘lsa, unga 1 qo‘shilsin; agar manfiy bo‘lsa, undan 2 ayirilsin; agar nol bo‘lsa, u 10 ga almashtirilsin</h1>
    <form action="3.php" method="POST">
        <input type="number" , placeholder="son" name='a'>
        <button type="submit">ok </button>
    </form>





</body>

</html>