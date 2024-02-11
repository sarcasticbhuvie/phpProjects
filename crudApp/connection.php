<?php
    $servername = "Localhost";
    $username = "root";
    $password = "";
    $database = "practicedb";
    $con = mysqli_connect($servername, $username, $password, $database);
    if($con){
        // echo "connection succesfull";
    }
    else{
        die(mysqli_error($con));
    }
?>