<?php
    $title="View Attendances";
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
                    <li class="breadcrumb-item active">View Attendance</li>
                    </ol>
                </nav>
                </div><!-- End Page Title -->


                <!--   =========================== Content Start from here =====================  -->




<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				View Attendances
			</div>
			<div class="card-body">
				<form method="post">
				<div class="row">
					<div class="col-sm-4">
					<label class="form-label">
						Date From
					</label>
					<input type="date" name="fdate" class="form-control"/>
					</div>
					<div class="col-sm-4">
					<label class="form-label">
						Date To
					</label>
					<input type="date" name="tdate" class="form-control"/>
					</div>
					<div class="col-sm-4"><br/>
						<input type="submit" class="btn btn-primary mt-1" name="atsub"/>
					</div>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<table class="table table-hover">
					<thead>
						<tr>
						<th>Sr.No</th><th>Employee Name</th><th>Attendance</th><th>Date</th>
						</tr>
					</thead>
					<tbody>
						<?php
							if(isset($_POST['atsub']))
							{
								$fdate=$_POST['fdate']; //YYYY-mon-date  -->string
								$ffdate=explode('-',$fdate);  // ['yyy','mon','date']  --> '-'
										
								$fffdate=array_reverse($ffdate);  // ['date','mon','yyyy']  -->reverse Array
								$fdatecon=implode('-',$fffdate); // date-mon-yyyy   --> string -> '-'
								
								
								$tdate=$_POST['tdate'];
								$ttdate=explode('-',$tdate);
								$tttdate=array_reverse($ttdate);
								$tdatecon=implode('-',$tttdate);
								
								$q="select * from tbl_attendance join tbl_employee on tbl_attendance.empid=tbl_employee.emp_id  where tbl_attendance.date>='$fdatecon' and tbl_attendance.date<='$tdatecon'";
								$res=mysqli_query($con,$q);
								$i=1;
								while($row=mysqli_fetch_array($res))
								{?>
									
									
									<tr>
										<td><?php  echo $i; $i++ ?></td>
										<td><?php  echo $row['name']; ?></td>
										<td class=" text-uppercase"><?php  echo $row['status']; ?></td>
										<td><?php  echo $row['date']; ?></td>
									</tr>
									
								<?php
								}
							}
							else
							{
								echo "<tr><td colspan='3'><h3>No Date Selected Yet.</h3><td></tr>";
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