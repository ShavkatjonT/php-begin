<?php
if ($_POST) {
    if ($_POST['a'] && $_POST['b'] && $_POST['c'] && $_POST['a2'] && $_POST['b2'] && $_POST['c2']) {
        $a =  $_POST['a'];
        $b =  $_POST['b'];
        $c =  $_POST['c'];

        $a2 =  $_POST['a2'];
        $b2 =  $_POST['b2'];
        $c2 =  $_POST['c2'];

        $d = $a * $b2 - $a2 * $b;
        if ($d != 0) {
            $x = ($c * $b2 - $c2 * $b) / $d;

            $y = ($a * $c2 - $c2 * $c) / $d;

            echo 'natija x= ' . $x . " <br/>" . "y= " . $y;
        } else {
            echo 'd ni qiymaaat 0 da teng';
        }
    } else {
        echo "inputlarga qiymat kiriting";
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
    <h1>
        A<sub>1</sub>*x+B<sub>1</sub>*y=C<sub>1</sub><br>
        A<sub>2</sub>*x+B<sub>2</sub>*y=C<sub>2</sub>
    </h1>


    <form action="40.php" method="POST">
        <input type="number" , placeholder="a1" name='a'>
        <input type="number" , placeholder="b2" name='b'>
        <input type="number" , placeholder="c3" name='c'>
        <br><br>
        <input type="number" , placeholder="a2" name='a2'>
        <input type="number" , placeholder="b2" name='b2'>
        <input type="number" , placeholder="c2" name='c2'>
        <br><br>
        <button type="submit">ok </button>
    </form>
</body>

</html>