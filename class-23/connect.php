<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="curd_db";

    $conn=mysqli_connect($servername,$username,$password,$dbname);
   /** 
    if(!$conn){
        die("Connection failed".mysqli_connect_erro());

    }
    else {
        echo "connection siccessfully"; 
    }
    */
?>