<?php
	
	include '../connection.php';
	$id=$_REQUEST['id'];
	$qpic="SELECT photo FROM `tbl_employee` WHERE emp_id='$id'";
	$respic=mysqli_query($con,$qpic);
	$rowpic=mysqli_fetch_array($respic);
	
	$oldpic=$rowpic[0];
	
	$qdelemp="delete from tbl_employee where emp_id='$id'";
	
	
	
	
	if(mysqli_query($con,$qdelemp))
	{
		unlink("assets/emppic/$oldpic");
		header("location:viewemp.php?msg=Employee record deleted Successfully");
	}
	else
	{
		header("location:viewemp.php?msg=Employee record not deleted !!!");
	}
	
	

?>