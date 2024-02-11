<?php
    $title="Dashboard";
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
                    <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
                </div><!-- End Page Title -->


                <!--   =========================== Content Start from here =====================  -->



<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				View Salary
			</div>
			<div class="card-body">
				<form method="post">
				<label class="form-label">Select Month And Year</label>
				<input type="month" class="form-control" name="month" required id="startMonth" />
				<input type="submit" class="btn btn-primary mt-3" name="btnsal"/>
				</form>
			</div>
			<div class="card-footer">
			<?php
				if(isset($_POST['btnsal']))
				{
					$m=$_POST['month'];
					$ma=explode('-',$m);
					$mr=array_reverse($ma);
					$ms=implode('-',$mr);
					//echo $ms;
					$mss='01-'.$ms;
					$mse='31-'.$ms;
					$q="select * from tbl_attendance where date >= '$mss' and date <= '$mse' and empid = '$empid'";
					// echo $q;
					$rescal=mysqli_query($con,$q);
					$rowp=mysqli_num_rows($rescal);  // Present Days in that month
					// echo $rowp; //1
					// $qdep="select dep_id from tbl_employee where emp_id='$empid'";
					$qdep="select * from tbl_employee join tbl_department where tbl_employee.dep_id = tbl_department.dep_id && tbl_employee.emp_id='$empid'";
					// echo $qdep;
					$resdep=mysqli_query($con,$qdep);
					$rowdep=mysqli_fetch_array($resdep);
					$salary = $rowdep['salary']; //Basic Salary Found
					$depid=$rowdep['dep_id'];// department id Found
					$qsal="select * from tbl_salary where dep_id='$depid'";
					$resqsal=mysqli_query($con,$qsal);
					$rowqsal=mysqli_fetch_array($resqsal);
					$paygrade = $rowqsal['paygrade']; //PayGrade Found Here
					
					$total_salary = $paygrade+(($salary/30)*$rowp);
						
				
			?>
			<div class="card-body">
								<table class="table table-hover table-border">
									<thead>
										<tr>
											<th>Amount Type</th>
											<th>Amount</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th>Basic Salary</th>
											<td><?php echo $salary; ?></td>
										</tr>
										<tr>
											<th>Pay Grade</th>
											<td><?php echo $paygrade; ?></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<th>Grand Total</th>
											<th class="text-success font-weight-bold"> <?php echo number_format($total_salary,2,'.',','); ?> Rs. </th>
										</tr>
									</tbody>
								</table>
							</div>
			<?php
				}
			
			?>
			</div>
		</div>
	</div>
</div>
























                















                <!--  =============================Content End here   ==========================    -->



                <?php include 'assets/includes/footer.php'; ?>
                <?php   include 'assets/includes/footerlink.php';  ?>
  </main>
</body>