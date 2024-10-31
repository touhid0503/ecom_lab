<h1>hi</h1>
<?php
    echo "HI "."Everyone";
    $v1=10;
    echo "<br>$v1<br>";
    for($i=0; $i<5; $i++){
        echo "$i";
    }
    $arr=array(1,2,3);
    echo "<br>";
    foreach($arr as $i){
        echo "$i"."<br>";
    }
    $arr1=array(1=>"hello","j"=>2,"k"=>"john");
    foreach($arr1 as $i=>$i_val){
        echo "$i = "."$i_val"."<br>";
    }
    function m($i){
        echo "$i<br>";
    }
    m(2);
    m("He is a Boy");
    define("pie",3.1416);
    echo pie;
?>
