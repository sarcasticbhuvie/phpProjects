<?php

	include '../connection.php';
	$n=$_POST['name'];
	$fn=$_POST['fname'];
	$mn=$_POST['mname'];
	$gen=$_POST['gender'];
	$dob=$_POST['dob'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$mob=$_POST['mobile'];
	$dep_id=$_POST['dep_id'];
	$addr=$_POST['address'];
	$picname=$_FILES['photo']["name"];
	
	
	
	/*print_r($_POST);
	echo "<br/>";
	print_r($pic);*/
	
	
	$pictmp=$_FILES['photo']['tmp_name'];
	$pictype=$_FILES['photo']['type'];
	
	
	
	
	// Code for generate dynamic file name
	$picnewname="Img-".rand(1,99).rand(0,9).rand(0,99).$picname;

	
	
	$q="insert into tbl_employee(name,fname,mname,gender,dob,email,password,mobile,address,dep_id,photo,date) values('$n','$fn','$mn','$gen','$dob','$email','$password','$mob','$addr','$dep_id','$picnewname',now())";
	
	
	if($pictype=='image/png' || $pictype=='image/jpeg' || $pictype=="image/jpg")
	{
	if(move_uploaded_file($pictmp,"assets/emppic/$picnewname"))
	{
			$rese=mysqli_query($con,$q);
			if($rese!=null)
			{
				header("Location:addemp.php?msg=Employee Added Successfully");
			}
			else
			{
				unlink("assets/emppic/$picnewname");
				header("Location:addemp.php?msg=Employee Not Added");
			}
		
	}
	else
	{
		header("Location:addemp.php?msg=Employee Not Added");
	}
	
	}
	else
	{
		header("Location:addemp.php?msg=Please choose jpeg/jpg/png type pic");
	}
	
	
	
	
	
?>