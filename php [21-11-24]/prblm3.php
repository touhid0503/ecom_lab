<?php
   
    if(isset($_POST["button"])){
        if($_POST['num1']){
            echo "ASM";
        }elseif($_POST['num2']){
            echo "SHIHAB";
        }elseif($_POST['num3']){
            echo "TONMOY";
        }
    }
?>
<form action="" method="post">
    <label>ASM</label>
    <input type="radio" name="num1" value="ASM"><br>
    <label>SHIHAB</label>
    <input type="radio" name="num2" value="SHIHAB"><br>
    <label>TONMOY</label>
    <input type="radio" name="num3" value="TONMOY"><br>
    
    <input type="submit" name="button">
</form>