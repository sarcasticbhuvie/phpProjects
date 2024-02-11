<?php

$id=$_REQUEST['id'];
include '../connection.php';
$q="delete from tbl_notice where notice_id='$id'";
$res=mysqli_query($con,$q);
if($res!=null)
{
	header('location:notice.php?msg=Notice Deleted');
}
else
{
	header('location:notice.php?msg=Notice Not  Deleted !!!');
}
?>