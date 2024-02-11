<?php
    $title="Notice";
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
                <h1>Notice</h1>
                <nav>
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Notice</li>
                    </ol>
                </nav>
                </div><!-- End Page Title -->


                <!--   =========================== Content Start from here =====================  -->






		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					 Notice  <h5 class="text-danger text-center">
						<?php
						if(isset($_REQUEST['msg']))
						{
							echo $_REQUEST['msg'];
						}
						?>
					 </h5>
				</div>
				<div class="card-body">
					<form action="noticecode.php" method="post">
						<label class="form-label" for="notice">Add New Notice</label>
						<input type="text" name="notice" id="notice" class="form-control mb-1"/>
						
						<input type="submit" class="btn btn-primary" />
					</form>
				</div>
			</div>
		</div>


<div class="col-sm-12">
	<div class="card">
		<div class="card-header">
			View Notices
		</div>
		<div class="card-body">
			<table class="table table-bordered" id="nottable">
				<thead class="bg-primary text-light">
					<tr>	
						<th>Sr.No</th>
						<th>Notice</th>
						<th>Date</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php  
						$q="select * from tbl_notice";
						$resn=mysqli_query($con,$q);
						$c=1;
						while($rown=mysqli_fetch_array($resn))
						{
							?>
							
							<tr>
								<td><?php  echo $c; ?></td>
								<td><?php   echo $rown['notice'];  ?></td>
								<td><?php  echo $rown['date']; ?></td>
								<td><a href="delnotice.php?id=<?php echo $rown['notice_id']; ?>"><i class="bi bi-trash-fill	"></i></a></td>
								
							</tr>
							
							
							
							<?php
							
							$c++;
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