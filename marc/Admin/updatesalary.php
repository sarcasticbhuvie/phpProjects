<?php
    $title="Update Salary";
	include '../connection.php';
	$id=$_REQUEST['id'];
	$q="select * from tbl_salary join tbl_department on tbl_salary.dep_id=tbl_department.dep_id where tbl_salary.sal_id='$id'";
	$res=mysqli_query($con,$q);
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'assets/includes/headerlink.php'; ?>
</head>
<body>
    <?php include 'assets/includes/header.php'; ?>
    <?php  include 'assets/includes/aisdebar.php'; ?>

    
  <main id="main" class="main">

                <div class="pagetitle">
                <h1>Dashboard</h1>
                <nav>
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
                </div><!-- End Page Title -->


                <!--   =========================== Content Start from here =====================  -->


				<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				Update salary
			</div>
			<div class="card-body">
				<?php
					if($row=mysqli_fetch_array($res))
					{
				?>
				
				<form method="post">
					<input type="hidden" name="salid" value="<?php echo $row['sal_id']; ?>"/>
					<label for="depname" class="form-label">Department</label>
					<input type="text" value="<?php echo $row['department']; ?>" readonly class="form-control" id="depname">
					<br/>
					<label class="form-label" for="sal">Salary</label>
					<input type="number" value="<?php echo $row['paygrade']; ?>" class="form-control" id="sal" name="paygrade"/>
					<input type="submit" class="btn btn-primary mt-3" value="Update Salary" name="upsal"/>
				</form>
				<?php
					}
				?>
			</div>
		</div>
	</div>
			





<?php

	if(isset($_POST['upsal']))
	{
		
		$salid=$_POST['salid'];
		$paygrade=$_POST['paygrade'];
		$query="update tbl_salary set paygrade='$paygrade' where sal_id='$salid'";
		if(mysqli_query($con,$query))
		{
				//header('location:salary.php?msg=Salary Updated Successfully');
				echo "<script>window.location.href='salary.php?msg=Salary Updated Successfully'</script>";
				
		}
		else
		{
			echo "<script>window.location.href='salary.php?msg=Salary Not Updated Try Again !!!'</script>";
		}
	}


?>





















                















                <!--  =============================Content End here   ==========================    -->



                <?php include 'assets/includes/footer.php'; ?>
                <?php   include 'assets/includes/footerlink.php';  ?>
  </main>
</body>