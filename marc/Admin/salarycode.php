<?php

	include '../connection.php';
	$dep_id=$_POST['dep'];
	$salary=$_POST['salary'];
	
	$qcheck="select * from tbl_salary where dep_id='$dep_id'";
	$rescheck=mysqli_query($con,$qcheck);
	$rowcheck=mysqli_num_rows($rescheck);
	if($rowcheck>0)
	{
		header("location:salary.php?task=1&dep=$dep_id&salary=$salary");
	}
	else{
	$q="insert into tbl_salary(dep_id,paygrade) values('$dep_id','$salary')";
	if($res=mysqli_query($con,$q))
	{
		header("location:salary.php?msg=salary added successfully");
	}
	else
	{
		header("location:salary.php?msg=salary not added try again !!!");
	}
	}
	

?>