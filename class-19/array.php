 <?php
 //indexted array
    // $customer_name=array("tanvir","alam","fahim","frahim","jahim");
    // // for($i=0;$i<count($customer_name);$i++){
    // //     echo $customer_name[$i]."</br>";
    // // }
    // $i=0;
    // while($i<count($customer_name)){
    //     echo $customer_name[$i]."</br>";
    //     $i++; 
    // }

    //assotiative array
    $price=array("tupi"=>"300","shirt"=>"200","panjabi"=>"500");
    //echo $prie['tupi'];
    foreach($price as $p=>$value){
        echo $p .':' .$value."</br>";
    }
 ?>