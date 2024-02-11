<?php
    $title="Add Salary";
	include '../connection.php';
	
	
	if(isset($_REQUEST['task']))
	{
		echo "<script>window.alert('This salary is already exits');</script>";
	}
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
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Add Salary</li>
                    </ol>
                </nav>
                </div><!-- End Page Title -->


                <!--   =========================== Content Start from here =====================  -->

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				Add salary
				<h5 class="text-center text-danger" id="msg">
					<?php
						if(isset($_REQUEST['msg']))
						{
							echo $_REQUEST['msg'];
						}
					?>
				</h5>
			</div>
			<div class="card-body">
			<form action="salarycode.php" method="post" id="form">
				<div class="row">

					<div class="col-sm-4">
						<select class="form-select" required name="dep">
							<option value="" selected disabled>--Select Department Here--</option>
							<?php
							$qdep="select * from tbl_department";
							$resdep=mysqli_query($con,$qdep);
							while($rowdep=mysqli_fetch_array($resdep))
							{
								?>
								
							<option value="<?php  echo $rowdep['dep_id']; ?>"><?php  echo $rowdep['department']; ?></option>
							
							
							<?php
							}
							?>
							
							
						</select>
					</div>
					<div class="col-sm-4">
						<input type="number" name="salary" class="form-control" placeholder="Enter Paygrade" required />
					</div>
					<div class="col-sm-4">
						<input type="submit"class="btn btn-primary" value="Add Salary">
					</div>
					
				</div>
				</form>
			</div>
			<div class="card-footer">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Sr.no</th><th>Department Name</th><th>Paygrade</th><th>Update Salary</th>
					</tr>
				</thead>
				<tbody>
			<?php 
				$q="select * from tbl_salary join tbl_department on tbl_salary.dep_id=tbl_department.dep_id";
				$res=mysqli_query($con,$q);
				$i=1;
				while($row=mysqli_fetch_array($res))
				{
					?>
					<tr>
					<td><?php  echo $i; $i++; ?></td>
					<td><?php  echo $row['department']; ?></td>
					<td><?php  echo $row['paygrade']; ?></td>
					<td><a href="updatesalary.php?id=<?php echo $row['sal_id'];  ?>">Update</a></td>
						
					</tr>
					
				<?php	
				}
			?>
			</tbody>
			</table>
			</div>
		</div>
	</div>
</div>				



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
	$(document).ready(function(){
		
		$('#msg').fadeIn("fast");
		$('#msg').fadeOut(5000);
	});
</script>



















                















                <!--  =============================Content End here   ==========================    -->



                <?php include 'assets/includes/footer.php'; ?>
                <?php   include 'assets/includes/footerlink.php';  ?>
				
			

				
				
  </main>
</body>