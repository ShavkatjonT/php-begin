<?php
    if($_POST){

        if($_POST['a']){
            $qiymat =  $_POST['a'];
            $s=$qiymat*$qiymat;
                echo 'kvadratni maydoni' . ' = ' .  $s;
            
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
    <form action="2.php" method="POST">
    <input type="number", placeholder="a" name='a'>
        <button type="submit">ok </button>
    </form>
</body>
</html>