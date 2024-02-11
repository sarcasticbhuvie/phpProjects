<?php
    include 'connection.php';
    $name= $_POST["name"];
    $username= $_POST["username"];
    $email= $_POST["email"];
    $password= $_POST["password"];
    $sql="INSERT INTO `tbl_users` (`name`, `username`, `email`, `password`, `date`) VALUES ('$name', '$username', '$email', '$password', 'CURDATE()');";
    // echo $sql;
    $result=mysqli_query($con,$sql);
    if($result){

        echo "you are registered";
    }
    else{
        die("Error".mysqli_connect_error());
    }

?>

