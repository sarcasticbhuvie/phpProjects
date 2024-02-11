<?php
	
	$status=$_REQUEST['s'];
	$leave_id=$_REQUEST['lid'];
	//echo $status;
	
	include '../connection.php';
	
	$q="update tbl_leave set status='$status' where leave_id='$leave_id'";
	if($res=mysqli_query($con,$q))
	{
		header('location:leave.php?msg=Leave status updated successfully');
	}
	else
	{
		header('location:leave.php?msg=Leave status Not updated please try again !!!');
	}
	

?>