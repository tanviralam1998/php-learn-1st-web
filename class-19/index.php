<?php
    $str1="fizz";
    $str2="bzz";
    $str3=$str1.$str2;
    //var_dump();
    for($i=1;$i<100;$i++){
        
        if($i%15==0){
            echo $str3."</br>";
        }
        else if($i%3==0){
            echo $str1."</br>";
        }
        elseif($i%5==0){
            echo $str2."</br>";
        }
        else {
            
            echo $i."</br>";
        }
    }
?>