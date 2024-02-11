<?php
	
	$department=$_POST['department'];
	//echo $department;
	include '../connection.php';
	$q="insert into tbl_department(department,date) values('$department',now())";
	//echo $q;
	
	$resdep=mysqli_query($con,$q);
	if($resdep!=null)
	{
		header("Location:department.php?msg=Department Added");
	}
	else
	{
		header("Location:department.php?msg=Department Not Added !!!");
	}

?>