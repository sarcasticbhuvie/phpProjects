<?php
	include '../connection.php';
	$id=$_POST['id'];

	$n=$_POST['name'];
	$fn=$_POST['fname'];
	$mn=$_POST['mname'];
	$gen=$_POST['gender'];
	$dob=$_POST['dob'];
	$email=$_POST['email'];
	$mob=$_POST['mobile'];
	$dep_id=$_POST['dep_id'];
	$addr=$_POST['address'];
	$picname=$_FILES['photo']["name"];
	
	$qpic="SELECT photo FROM `tbl_employee` WHERE emp_id='$id'";
	$respic=mysqli_query($con,$qpic);
	$rowpic=mysqli_fetch_array($respic);
	
	$oldpic=$rowpic[0];
	

	
	
	
	if($picname!=null)
	{
		
		
		$pictmp=$_FILES['photo']['tmp_name'];
		$pictype=$_FILES['photo']['type'];

		// Code for generate dynamic file name
		$picnewname="Img-".rand(1,99).rand(0,9).rand(0,99).$picname;
		
		if($pictype=='image/png' || $pictype=='image/jpeg' || $pictype=="image/jpg")
		{
				if(move_uploaded_file($pictmp,"assets/emppic/$picnewname"))
				{
					
					
					$qupdateemp="update tbl_employee set name='$n', fname='$fn', mname='$mn', gender='$gen', dob='$dob', email='$email', 	mobile='$mob',	address='$addr',	dep_id='$dep_id',photo='$picnewname' where emp_id='$id'";
		
					$resemp=mysqli_query($con,$qupdateemp);
					if($resemp!=null)
					{
						
						unlink("assets/emppic/$oldpic");
						header("location:viewemp.php?msg=Record Updated Successfully");
					}
					else
					{
						header("location:editemp.php?msg=Record not updated try again !!!&id=$id");
					}
					
					
					
				}
			
			
			
		}
		else
			
			{
				header("location:editemp.php?msg=Please Choose jpg/png/jpeg pic type&id=$id");
			}
	
		
		
		
	}
	else
	{
		
		$qupdateemp="update tbl_employee set name='$n', fname='$fn', mname='$mn', gender='$gen', dob='$dob', email='$email', 	mobile='$mob',	address='$addr',	dep_id='$dep_id' where emp_id='$id'";
		
		$resemp=mysqli_query($con,$qupdateemp);
		if($resemp!=null)
		{
			header("location:viewemp.php?msg=Record Updated Successfully");
		}
		else
		{
			header("location:editemp.php?msg=Record not updated try again !!!&id=$id");
		}
		
		
	}
	
	
	

	

?>