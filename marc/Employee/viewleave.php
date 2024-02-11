<?php
    $title="Leave";
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
                    <li class="breadcrumb-item active">View your leave</li>
                    </ol>
                </nav>
                </div><!-- End Page Title -->


                <!--   =========================== Content Start from here =====================  -->


				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								View Your Leave and it's Status
							</div>
							<div class="card-body">
								<table class="table table-hover table-border">
									<thead>
										<tr>
											<th>Sr.No</th>
											<th>Date From</th>
											<th>Date To</th>
											<th>Reason</th>
											<th>Status</th>
											<th>Apply Date</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$c=1;
											$q="select * from tbl_leave where emp_id='$empid'";
											$res=mysqli_query($con,$q);
											while($row=mysqli_fetch_array($res))
											{
												?>
													<tr>
														<td><?php  echo $c; $c++;  ?></td>
														<td><?php echo $row['dfrom']; ?></td>
														<td><?php echo $row['dto'] ?></td>
														<td><?php echo $row['reason']; ?></td>
														<td>
														
															<?php
																if($row['status']=='1')
																{
																	echo "<span class='text-warning'>Pending</span>";
																}
																else if($row['status']=='2')
																{
																	echo "<span class='text-success'>Approved</span>";
																}
																else if($row['status']=='3')
																{
																	echo "<span class='text-danger'>Disapproved</span>";
																}
															?>
														
														</td>
														<td><?php echo $row['doa']; ?></td>
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