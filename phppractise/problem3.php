<?php
    $v1="He is a Boy.";
    $l=strlen($v1);
    $v2="";
    $j=0;
    for($i=$l-1; $i>=0; $i--){
        $v2[$j]=$v1[$i];
        $j++;
    }
    echo $v2;
?>