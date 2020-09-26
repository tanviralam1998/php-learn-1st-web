<?php 
    include_once 'connect.php';
    $table1="user";
    $sql="CREATE TABLE $table1 (id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, dob date NOT NULL)";
    
    $query =mysqli_query($conn,$sql);
    if($query){
        echo"Table created successfully";
    }
    else {
        echo "Table dose not created successfully".mysqli_error($conn);
    }
    mysqli_close($conn);
?>