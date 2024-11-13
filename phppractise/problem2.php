<?php
    function fact($n){
        $v1=$n;
        for($i=$v1-1; $i>0; $i--){
            $v1*=$i;
        }
        echo $v1;
    }
    fact(5);
?>