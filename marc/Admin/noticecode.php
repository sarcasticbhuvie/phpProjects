<?php


	$n=$_POST['notice'];
	//echo $n;
	include '../connection.php';
	
	$q="insert into tbl_notice(notice,date) values('$n',now())";
	$res=mysqli_query($con,$q);
	if($res!=null)
	{
		header("location:notice.php?msg=Notice Added");
	}
	else
	{
		header("location:notice.php?msg=Notice Not Added Due to Server");
	}
	

?>