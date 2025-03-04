<?php
    if($_POST){

        if($_POST['a']){
            $qiymat =  $_POST['a'];
            $l=$qiymat*2*3.14;
            $s=3.14 *$qiymat*$qiymat;
                echo 'uzunligi' . ' = ' .  $l . "<br>";
                echo ' maydoni' . ' = ' .  $s . "<br>";
            
        }else {
            echo "inputga qiymat kiriting";
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
    <h1>Aylana </h1>
    <form action="7.php" method="POST">
    <input type="number", placeholder="Radius" name='a'>
        <button type="submit">ok </button>
    </form>
</body>
</html>