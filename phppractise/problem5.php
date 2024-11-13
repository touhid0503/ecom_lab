<?php
    $v1=array(1,2,3,4,5,6,7,8,9,10);
    $sum=0;
    for($i=0; $i<10; $i++){
        $sum+=$v1[$i];
    }
    echo $sum,"<br>";
    $m=$v1[0];
    $n=$v1[0];
    for($i=1; $i<10; $i++){
        if($v1[$i]>$m)
            $m=$v1[$i];
        if($v1[$i]<$n)
            $n=$v1[$i];
    }
    echo $m,"<br>",$n;
?>