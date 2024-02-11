<?php
    $title="Attendance";
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
                    <li class="breadcrumb-item active">Attendance</li>
                    </ol>
                </nav>
                </div><!-- End Page Title -->


                <!--   =========================== Content Start from here =====================  -->


	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Add Attendance
				</div>
				<div class="card-body">
				<form method="post">
				<div class="row">
					<div class="col-sm-4 mt-2">
					
					<select class="form-select" name="dep_id" required>
						<option disabled selected value="">--Select Department--</option>
						<?php
							include '../connection.php';
							$qdep="select * from tbl_department";
							$rdep=mysqli_query($con,$qdep);
							while($rowdep=mysqli_fetch_array($rdep))
							{
								?>
								
								<option value="<?php  echo $rowdep['dep_id']; ?>"><?php  echo $rowdep['department']; ?></option>
								
								
								<?php
							}
						?>
					</select>
					</div>
						<div class="col-sm-2 mt-2">
						<input type="submit" value="view Employee" name="depselect" class="btn btn-primary">
						</div>
					
					
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				Attendance 
			</div>
			<div class="card-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Sr.no</th><th>Employee Name</th><th>Department</th><th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							if(isset($_POST['depselect']))
							{
								$dep_id=$_POST['dep_id'];
								//echo $dep_id;
								$qemp="select * from tbl_employee join tbl_department on tbl_employee.dep_id=tbl_department.dep_id where tbl_employee.dep_id='$dep_id'";
								$resemp=mysqli_query($con,$qemp);
								
								
								
								$c=1;
								while($rowemp=mysqli_fetch_array($resemp))
								{
									?>
									<tr>
										<td><?php echo $c; $c++; ?></td>
										<td><?php echo $rowemp['name'];  ?></td>
										<td><?php  echo $rowemp['department'] ?></td>
										<td>
										<?php
											$today=date('d-m-Y');
											$emp=$rowemp['emp_id'];
											$qatcheck="select * from tbl_attendance where empid='$emp' and date='$today'";
											
											
											$ratcheck=mysqli_query($con,$qatcheck);
											$found=mysqli_num_rows($ratcheck);
											
											if($found>0)
											{
												?>
												<a href="attendancecode.php?empid=<?php echo $rowemp['emp_id'];  ?>&status=a" class="text-danger">Absent</a></td>
											<?php	
											}
											else
											{
										?>
										
										
										<a href="attendancecode.php?empid=<?php echo $rowemp['emp_id'];  ?>&status=p" class="text-success">Present</a></td>
										
										<?php
											}
										?>
										
										
										
									</tr>
									
									
									
									
									
								<?php
									
								}
							}
							else
							{
								echo "<tr><td colspan='3' class='text-center'>Department is not selected yet</td></tr>";
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
























                















                <!--  =============================Content End here   ==========================    -->



                <?php include 'assets/includes/footer.php'; ?>
                <?php   include 'assets/includes/footerlink.php';  ?>
  </main>
</body>