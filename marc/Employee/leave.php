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
                    <li class="breadcrumb-item active">Leave</li>
                    </ol>
                </nav>
                </div><!-- End Page Title -->


                <!--   =========================== Content Start from here =====================  -->


			<div class="row">
				<div class="col-md-12">
						<div class="card">
							<div class="card-header">
							Apply New leave
							<h5 class="text-danger text-center">
						<?php
						if(isset($_REQUEST['msg']))
						{
							echo $_REQUEST['msg'];
						}
						?>
					 </h5>
							</div>
							<div class="card-body">
								<form action="leavecode.php" method="post">
										<input type="hidden" name="empid" value="<?php  echo $empid; ?>" />
									<div class="mb-3">
											<label for="fdate" class="form-label">Date From </label>
											<input type="date" id="fdate" name="fdate" class="form-control"required />
									</div>
									<div class="mb-3">
											<label for="dto" class="form-label">Date To </label>
											<input type="date" id="dto" name="dto" class="form-control" required />
									</div>
									<div class="mb-3">
											<label for="r" class="form-label">Reason </label>
											<input type="text" id="r" name="r" class="form-control" required />
									</div>
									<div class="mb-3 d-grid">
										<input type="submit" Value="Apply Leave" class="btn btn-primary d-grid">
									</div>
									
								</form>
							</div>
						</div>
				</div>
			</div>

























                















                <!--  =============================Content End here   ==========================    -->



                <?php include 'assets/includes/footer.php'; ?>
                <?php   include 'assets/includes/footerlink.php';  ?>
  </main>
</body>