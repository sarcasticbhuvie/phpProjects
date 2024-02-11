<?php

	$emp=$_REQUEST['empid'];
	//echo $emp;
	$today=date('d-m-Y');
	$t=time();
	$status=$_REQUEST['status'];
	include '../connection.php';
	//echo $today;
	if($status=='p')
	{
	
	
	$q="insert into tbl_attendance(empid,status,date) values('$emp','$status','$today')";
	$res=mysqli_query($con,$q);
	if($res!=null)
	{
		header('location:attendance.php?msg=attendance added');
		
	}
	else
	{
		header('location:attendance.php?msg=attendance not  added please try again !!!');
	}
	}
	else if($status=='a')
	{
		$query="delete from tbl_attendance where empid='$emp' and date='$today'";
		
		$res1=mysqli_query($con,$query);
		
	if($res1!=null)
	{
		header('location:attendance.php?msg=attendance added');
		
	}
	else
	{
		header('location:attendance.php?msg=attendance not  added please try again !!!');
	}
	}

?>