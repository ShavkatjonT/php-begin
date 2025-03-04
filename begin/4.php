<?php
    if($_POST){

        if($_POST['d']){
            $qiymat =  $_POST['d'];
            $l=$qiymat*3.14;
                echo 'doirani uzunligi' . ' = ' .  $l;
            
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
    <form action="4.php" method="POST">
    <input type="number", placeholder="diameter" name='d'>
        <button type="submit">ok </button>
    </form>
</body>
</html>