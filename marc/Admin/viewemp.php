<?php
    $title="Employee";
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
                <h1>Employee</h1>
                <nav>
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Employee</li>
                    <li class="breadcrumb-item active">View Employee</li>
                    </ol>
                </nav>
                </div><!-- End Page Title -->


                <!--   =========================== Content Start from here =====================  -->
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">View Employee
						<h5 class="text-danger text-center"> 
						<?php  
							if(isset($_REQUEST['msg']))
							{
								echo $_REQUEST['msg'];
							}
					?>
					</h5>
						
						</div>
						<div class="card-body" style="overflow-y:auto;">
						<table class="table table-bordered fs-7" style="font-size:14px;">
							<thead class="bg-primary text-light text-center">
							<tr >
								<th>Sr. No.</th>
								<th>Name</th>
								<th>Father Name</th>
								<th>Mother Name</th>
								<th>Date Of Birth</th>
								<th>Gender</th>
								<th>Email</th>
								<th>Mobile</th>
								<th>Department</th>
								<th>Address</th>
								<th>Photo</th>
								<th>Edit</th>
								<th>Delete</th>
								
							</tr>
						</thead>
						<tbody class="text-center text-hover">
							<?php
								$qemp="select * from tbl_employee join tbl_department on tbl_employee.dep_id=tbl_department.dep_id";
								// echo $qemp;
								$resemp=mysqli_query($con,$qemp);
								$sn=1;
								// print_r($resemp);
								// var_dump($resemp);
								// print_r(mysqli_fetch_array($resemp));
								// echo (mysqli_fetch_array($resemp))['emp_id'];
								while($rowemp=mysqli_fetch_array($resemp))
								{
									
									
									?>
									
									<tr>
										<td style="vertical-align:middle"><?php echo $sn; $sn++; ?>  </td>
										<td class="text-capitalize" style="vertical-align:middle"><?php  echo $rowemp["name"];  ?></td>
										<td class="text-capitalize" style="vertical-align:middle"><?php  echo $rowemp["fname"];  ?></td>
										<td class="text-capitalize" style="vertical-align:middle"><?php  echo $rowemp["mname"];  ?></td>
										<td style="vertical-align:middle"><?php  echo $rowemp["dob"];  ?></td>
										<td class="text-capitalize" style="vertical-align:middle"><?php  echo $rowemp["gender"];  ?></td>
										
										<td style="vertical-align:middle"><?php  echo $rowemp["email"];  ?></td>
										<td style="vertical-align:middle"><?php  echo $rowemp["mobile"];  ?></td>
										<td style="vertical-align:middle"><?php  echo $rowemp["department"];  ?></td>
										<td class="first-letter-uppercase" style="vertical-align:middle"><?php  echo $rowemp["address"];  ?></td>
										<td><img src="assets/emppic/<?php  echo $rowemp['photo'];  ?>" style="height:70px; width:70px;"></td>
										
										<td style="vertical-align:middle">
											<a href="editemp.php?id=<?php  echo $rowemp["emp_id"];  ?>"> <i class="bi bi-pencil-fill"></i> </a>
										</td>
										<td style="vertical-align:middle">
											<a href="delemp.php?id=<?php  echo $rowemp["emp_id"];  ?>"> <i class="bi bi-trash-fill text-danger"></i></a>
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
				



























                















                <!--  =============================Content End here   ==========================    -->



                <?php include 'assets/includes/footer.php'; ?>
                <?php   include 'assets/includes/footerlink.php';  ?>
  </main>
</body>


</html>