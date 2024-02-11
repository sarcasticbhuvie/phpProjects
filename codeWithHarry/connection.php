<?php
$server="localhost";
$username="root";
$password="";
$database="practicedb";
$con = mysqli_connect($server,$username,$password,$database);
if(!$con){
//     echo "succuss";
// }
// else{
    die("Error".mysqli_connect_error());
}

?>