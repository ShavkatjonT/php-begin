<?php
    if($_POST){
        if($_POST['a'] && $_POST['b'] ){
            $a =  $_POST['a'];
            $b =  $_POST['b'];
            $s=$a*$b;
            $p=($a+$b)*2;
            
                echo 'kvadratni maydoni' . ' = ' .  $s . "<br>";
                echo 'Perimeter' . ' = ' .  $p;
            
        }else {
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
    <form action="3.php" method="POST">
    <input type="number", placeholder="a" name='a'>
    <input type="number", placeholder="b" name='b'>
    
        <button type="submit">ok </button>
    </form>
</body>
</html>