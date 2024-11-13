<?php
    $v1="I am Touhidul Islam";
    $v2="a";
    $l=strlen($v1);
    $count=0;
    for($i=0; $i<$l; $i++){
        if($v1[$i]==$v2){
            $count++;
        }
    }
    echo $count;
?>