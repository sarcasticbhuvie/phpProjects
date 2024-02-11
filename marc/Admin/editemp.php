<?php
    $title=" Edit Employee";
	include "../connection.php";
	
	$id=$_REQUEST['id'];
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
                    <li class="breadcrumb-item active"><a href="viewemp.php">Veiw Employee</a></li>
                    <li class="breadcrumb-item active">Update Employee Info</li>
                    </ol>
                </nav>
                </div><!-- End Page Title -->


                <!--   =========================== Content Start from here =====================  -->




 <div class="col-md-12">
    <div class="container col-md-12 card">
        <div class=" card-header">
			Edit Employee Information
			<h5 class="text-danger text-center"> 
					<?php  
							if(isset($_REQUEST['msg']))
							{
								echo $_REQUEST['msg'];
							}
					?>
			</h5>
		</div>
		    <form action="editempcode.php" method="post" enctype="multipart/form-data">
              <div class="card-body">
				
				<?php
				$qemp="select * from tbl_employee  join tbl_department on tbl_employee.dep_id=tbl_department.dep_id  where tbl_employee.emp_id='$id'";
				$resemp=mysqli_query($con,$qemp);
				if($rowemp=mysqli_fetch_array($resemp))
				{
					?>
					
					<input type="hidden" value="<?php echo $rowemp['emp_id']; ?>" name="id"/>
					
				  <div class="mb-3">
				     <label for="name" class="form-label">Name:</label>
				      <input type="text" id="name" name="name" class="form-control" placeholder="Enter Employee Name"  required pattern="[A-Za-z\s]{3,}" title="This is not a name"  value="<?php echo $rowemp['name']; ?>" />
				   </div>
				   
				   <div class="mb-3">
				     <label for="fname" class="form-label">Father Name:</label>
				      <input type="text" id="fname" name="fname" class="form-control" placeholder="Enter Employee Father Name" required pattern="[A-Za-z\s]{3,}" title="This is not a name"  value="<?php echo $rowemp['fname']; ?>"/>
				   </div>
				   
				   <div class="mb-3">
				     <label for="mname" class="form-label">Mother Name:</label>
				      <input type="text" id="mname" name="mname" class="form-control" placeholder="Enter Employee Mother Name" required pattern="[A-Za-z\s]{3,}" title="This is not a name" value="<?php echo $rowemp['mname']; ?>"/>
				   </div>
				   
				   <div class="mb-3">
					<?php
						$m=""; $f=""; $o="";
						
						$gen=$rowemp['gender'];
						
						if($gen=="male")
						{
							$m="checked";
						}
						else if($gen=="female")
						{
							$f="checked";
						}
						else if($gen=="other")
						{
							$o="checked";
						}
					?>
				     <label  class="form-label">Gender:</label>
				      <input type="radio" class="form-check-input" name="gender" value="male" <?php  echo $m;?>/> Male &nbsp;  &nbsp;  &nbsp; 
					  <input type="radio" class="form-check-input" name="gender" value="female" <?php  echo $f;?>/> Female &nbsp;  &nbsp;  &nbsp;  &nbsp; 
					  <input type="radio" class="form-check-input" name="gender" value="other" <?php  echo $o;?>/> Other
				   </div>
				   
				    <div class="mb-3">
				     <label for="mname" class="form-label">Date Of Birth:</label>
				      <input type="date" id="date" name="dob" class="form-control" max="2006-01-01" required  value="<?php echo $rowemp['dob']; ?>" >
					</div>
				   
				   <div class="mb-3">
				     <label for="email" class="form-label">Email:</label>
				      <input type="email" id="email" name="email" class="form-control" placeholder="Enter Employee Email" value="<?php echo $rowemp['email']; ?>" required />
					  </div>
					  

				  <div class="mb-3">
				     <label for="mobile" class="form-label">Mobile:</label>
				      <input type="tel" id="mobile" name="mobile" class="form-control" placeholder="Enter Employee Mobile No" required pattern="[6-9][0-9]{9}" title="This is not Mobile No."  value="<?php echo $rowemp['mobile']; ?>"/> 
				   </div>
				   
				   <div class="mb-3">
						<label for="dep_id" class="form-label"> Department</label>
						
							<select name="dep_id" id="dep_id" class="form-select" required >
							
								<option selected disabled hidden value=""><?php  echo $rowemp['department']; ?></option>
								
								<?php
									$qdep="select * from tbl_department";
									$resdep=mysqli_query($con,$qdep);
									while($rowdep=mysqli_fetch_array($resdep))
									{
										?>
										
										
										<option value=" <?php echo $rowdep['dep_id'];  ?>"><?php echo $rowdep['department'];  ?></option>
										
										
										<?php
										
									}
									
								?>
								
								
							</select>
				   </div>
				   
				  <div class="mb-3">
				     <label for="mname" class="form-label">Address:</label>
				     <textarea class="form-control" name="address" id="address" placeholder="Enter Employee Address" required><?php echo $rowemp['address']; ?></textarea>
				   </div>
				   
				  <div class="row mb-3">
					<div class="col-sm-6">
				    <label for="photo" class="form-label">Photo</label>
					<input type="file" id="photo" name="photo" class="form-control" placeholder="Uploade photo" />
					
					</div>
					<div class="col-sm-6">
							<img src="assets/emppic/<?php echo $rowemp['photo']; ?>" style="height:100px;width:100px;"/>
					</div>
				   </div>
				 
				  <div class="mb-3 d-grid">
				   <input type="submit" class="btn btn-primary btn-lg" />
				  </div>
				   
				   


				
					
					
					
					
					
					
					
					
				<?php
				}
				
				?>
					
			
			     
                </div>
           </form>
        </div>
 </div>























                















                <!--  =============================Content End here   ==========================    -->



                <?php include 'assets/includes/footer.php'; ?>
                <?php   include 'assets/includes/footerlink.php';  ?>
  </main>
</body>