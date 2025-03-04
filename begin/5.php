<?php
    if($_POST){

        if($_POST['a']){
            $qiymat =  $_POST['a'];
            $v=$qiymat*$qiymat*$qiymat;
            $s=6*$qiymat*$qiymat;
                echo 'Kubni hajmi' . ' = ' .  $v . "<br>";
                echo 'sirt maydoni' . ' = ' .  $s . "<br>";
            
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
    <h1>Kubni hajmi va sirt maydoni </h1>
    <form action="5.php" method="POST">
    <input type="number", placeholder="Kub chetini uzunligi" name='a'>
        <button type="submit">ok </button>
    </form>
</body>
</html>