<?php
   
    if(isset($_POST["button1"])){
       echo $_POST['num1']+ $_POST['num2'];
     }elseif (isset($_POST["button2"])){
        echo $_POST['num1']- $_POST['num2'];
     }elseif (isset($_POST["button3"])){
        echo $_POST['num1']* $_POST['num2'];
     }elseif (isset($_POST["button4"])){
        echo $_POST['num1']/ $_POST['num2'];
     }elseif (isset($_POST["button5"])){
        echo $_POST['num1']% $_POST['num2'];
     }
?>
<form action="" method="post">
    
    <input type="number" name="num1"><br><br>
    <input type="number" name="num2"><br><br>
    <input type="submit" name="button1" value="add">
    <input type="submit" name="button2" value="sub">
    <input type="submit" name="button3" value="mult">
    <input type="submit" name="button4" value="div">
    <input type="submit" name="button5" value="mod">

</form>