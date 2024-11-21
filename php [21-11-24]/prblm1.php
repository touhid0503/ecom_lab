<?php
    $p=rand(1,10);
   
    if(isset($_POST["button"])){
        if($_POST["num"]==$p){
            echo "ok";
        }else{
            echo "not ok";
        }
    }
?>
<form action="" method="post">
    
    <input type="number" name="num">
    <input type="submit" name="button">
</form>