<?php

    include 'connection.php';
    $username= $_POST["username"];
    $password= $_POST["password"];
    
    $sql="SELECT * FROM `tbl_users` WHERE username='$username' and password ='$password';";
    // echo $sql;
    $result=mysqli_query($con,$sql);
    // echo $result;
    $row = mysqli_fetch_array($result);
    print_r($row);
    if($row!=null){
        // session_start();
        // $_SESSION['userid']=$username;        
        header("location:Admin/index.php");
    }
    else{
        header("location:login.php?msg=userid or password is wrong");

    }

?>
