<?php
    if($_POST){
        if($_POST['a'] && $_POST['b'] ){
            $a =  $_POST['a'];
            $b =  $_POST['b'];
            $p=($a+$b)/2;
            
                echo 'natija' . ' = ' .  $p . "<br>";
            
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
    <h1>O'rta arfmetik</h1>
    <form action="8.php" method="POST">
    <input type="number", placeholder="a" name='a'>
    <input type="number", placeholder="b" name='b'>
    
        <button type="submit">ok </button>
    </form>
</body>
</html>