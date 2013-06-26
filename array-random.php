<?php
    $testarray=array("aa",'bb','cc','dd','ee','ff','gg','hh');
    print_r($testarray);
    $arraykeys=array_rand($testarray,3);
    foreach($arraykeys as $key=>$value){
        $ranArray[$value]=$testarray[$value];
    }
    print_r($ranArray);
?>