<?php
// echo "edelete";
include 'connection.php';
if(isset($_REQUEST['id'])){
    $id= $_REQUEST['id'];
    $query_for_name="select name from tbl_crud where sn='$id'";
    $result_for_name=mysqli_query($con,$query_for_name);
    $name_array=mysqli_fetch_assoc($result_for_name);
    $query="delete from tbl_crud WHERE sn='$id'";
    // echo $query;
    $result=mysqli_query($con,$query);
    if($result){
        header("location:display.php?msg=Record Deleted");
    }

}
?>