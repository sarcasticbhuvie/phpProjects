<?php


	include '../connection.php';
	$empid=$_POST['empid'];
	$dfrom=$_POST['fdate'];
	$dto=$_POST['dto'];
	$reason=$_POST['r'];
	$ql="insert into tbl_leave(emp_id,dfrom,dto,reason,status,doa) values('$empid','$dfrom','$dto','$reason','1',now())";
	
	$res=mysqli_query($con,$ql);
	if($res!=null)
	{
			header("location:index.php?msg=You leave is applied");
		
	}
	else
	{
		header("location:leave.php?msg=You leave is not applied please try again !!!");
	}
?>