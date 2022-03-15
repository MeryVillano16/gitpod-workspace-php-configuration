<?php
    $con = mysqli_connect("127.0.0.1", "root", "", "gitpod_db"); 
//server, username, password, database_name
    if($con){
        echo 'Connected successfully';
    }else{
        echo 'Failed to connect';
    }
?>