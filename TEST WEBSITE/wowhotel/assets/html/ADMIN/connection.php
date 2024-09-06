<?php

    $servername = "localhost";
    $user_name = "root";
    $password = "root";
    $db_name = "userdb";

    $conn= new mysqli($servername, $user_name, $password, $db_name, 4306);


    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo " ";
 
    


?>