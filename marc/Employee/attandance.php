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
                    <li class="breadcrumb-item active">Attendance</li>
                    </ol>
                </nav>
                </div><!-- End Page Title -->


                <!--   =========================== Content Start from here =====================  -->


<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				View Your Attendance
			</div>
			<div class="body">
				<table class="table table-hover datatable">
					<thead>
						<tr>
							<th>Sr.No</th>
							<th>Date</th>
							<th>Present</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$q="select * from tbl_attendance where empid='$empid'";
							$resq=mysqli_query($con,$q);
							$i=1;
							while($rowq=mysqli_fetch_array($resq))
							{
								?>
								
								<tr>
									<td><?php  echo $i; $i++; ?></td>
									<td><?php  echo $rowq['date']; ?></td>
									<td>Present</td>
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