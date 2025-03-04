<?php
    if($_POST){
        if($_POST['a'] && $_POST['b'] ){

            $a =  $_POST['a'];
            $b =  $_POST['b'];
            if($a>=0&&$b>=0){
                $p=$a*$b;
            
                echo 'natija' . ' = ' .  sqrt($p) . "<br>";
            
            }else{
                echo "Musbatson kiring";
            }
            
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
    <h1>Manfiy bo'lmagan 2 soni ko'paytmasini kvadrat lidiz dan chiqarish</h1>
    <form action="9.php" method="POST">
    <input type="number", placeholder="a" name='a'>
    <input type="number", placeholder="b" name='b'>
    
        <button type="submit">ok </button>
    </form>
</body>
</html>