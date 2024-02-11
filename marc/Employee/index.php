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
                    <!-- <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li> -->
                    <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
                </div><!-- End Page Title -->


                <!--   =========================== Content Start from here =====================  -->



	<div class="row">
		<div class="col-md-12">
				<div class="card">
					<div class="card-header">
							Notification
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
					<marquee direction="up" style="height:52vh;" onmouseover="this.stop();" onmouseout="this.start();">
						<?php
							$qn="select * from tbl_notice order by notice_id desc";
							$resqn=mysqli_query($con,$qn);
							while($rowqn=mysqli_fetch_array($resqn))
							{
								?>
								
								
								<p> <i class="bi bi-bell-fill text-danger"></i> <?php  echo $rowqn['notice']; ?> (<?php echo $rowqn['date'];  ?>)    </p>
								
								
						<?php		
							}
						?>
					</marquee>
					</div>
				</div>
		</div>
	</div>
























                















                <!--  =============================Content End here   ==========================    -->



                <?php include 'assets/includes/footer.php'; ?>
                <?php   include 'assets/includes/footerlink.php';  ?>
  </main>
</body>