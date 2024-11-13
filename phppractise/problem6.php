<?php
    $i1=1;
    $i2=20;
    for($i=$i1; $i<=$i2; $i++){
        $prime=true;
        for($j=2; $j<$i; $j++){
            if($i % $j==0){
                $prime=false;
                break;
            }
        }
        if($prime and $i>1)
            echo $i," ";
    }
?>