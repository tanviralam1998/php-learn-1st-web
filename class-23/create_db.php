<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="curd_db";

    $conn=mysqli_connect($serv ername,$username,$password);
    if(!$conn){
        die("Connection failed".mysqli_connect_erro());

    }
    $sql = "Create DATABASE $dbname";
    $query = mysqli_query($conn,$sql);
    if($query){
        echo "DATABASE CREATED SUCCESSFULLY";

    }
    else {
        echo "DATABASE DOES CREATE".mysqli_error($conn);

    }
    mysqli_close($conn);
?>