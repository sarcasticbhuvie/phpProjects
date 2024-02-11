<?php
    $title="Leave Applications";
	include '../connection.php';
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
                    <li class="breadcrumb-item active">Applications</li>
                    </ol>
                </nav>
                </div><!-- End Page Title -->


                <!--   =========================== Content Start from here =====================  -->


		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						View Leave Aplications
					</div>
					<div class="card-body">
						<table class="table table-hover">
							<thead>
							<tr>
								<th>Sr.No.</th>
								<th>Employee Name</th>
								<th>Date From</th>
								<th>Date To</th>
								<th>Reason</th>
								<th>Apply Date</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php
								$ql="select * from tbl_leave join tbl_employee on tbl_leave.emp_id=tbl_employee.emp_id where tbl_leave.status='1'";
								$resl=mysqli_query($con,$ql);
								$c=1;
								while($rowl=mysqli_fetch_array($resl))
								{
								?>	
									<tr>
										<td><?php  echo $c; $c++; ?></td>
										<td><?php  echo $rowl['name']; ?></td>
										<td><?php  echo $rowl['dfrom'];  ?></td>
										<td><?php  echo $rowl['dto'];  ?></td>
										<td><?php  echo $rowl['reason'];  ?></td>
										<td><?php  echo $rowl['doa'];  ?></td>
										<td>
											<a href="leavecode.php?s=2&lid=<?php  echo $rowl['leave_id']; ?>"><i class="bi bi-check-circle-fill text-success"></i></a>
											
											&nbsp;	&nbsp;	&nbsp;	&nbsp;
											<a href="leavecode.php?s=3&lid=<?php  echo $rowl['leave_id']; ?>"><i class="bi bi-x-circle-fill text-danger"></i></a>
										</td>

									
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
	
























                















                <!--  =============================Content End here   ==========================    -->



                <?php include 'assets/includes/footer.php'; ?>
                <?php   include 'assets/includes/footerlink.php';  ?>
  </main>
</body>