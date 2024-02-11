<?php

$id=$_REQUEST['id'];
include '../connection.php';

$q="delete from tbl_department where dep_id='$id'";

$resq=mysqli_query($con,$q);
if($resq!=null)
{
	header("location:department.php?msg=Department Deleted ");
	
}

else
{
	header("location:department.php?msg=Department Not Deleted !!!");
}
?>