<?php
    $title="Employee";
	include "../connection.php";
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
                    <li class="breadcrumb-item active">Add Employee</li>
                    </ol>
                </nav>
                </div><!-- End Page Title -->


                <!--   =========================== Content Start from here =====================  -->




 <div class="col-md-12">
    <div class="container col-md-12 card">
        <div class=" card-header">
			Add Employee
			<h5 class="text-danger text-center"> 
					<?php  
							if(isset($_REQUEST['msg']))
							{
								echo $_REQUEST['msg'];
							}
					?>
			</h5>
		</div>
		    <form action="addempcode.php" method="post" enctype="multipart/form-data">
              <div class="card-body">
			
			       <div class="mb-3">
				     <label for="name" class="form-label">Name:</label>
				      <input type="text" id="name" name="name" class="form-control" placeholder="Enter Employee Name"  required pattern="[A-Za-z\s]{3,}" title="This is not a name"  />
				   </div>
				   
				   <div class="mb-3">
				     <label for="fname" class="form-label">Father Name:</label>
				      <input type="text" id="fname" name="fname" class="form-control" placeholder="Enter Employee Father Name" required pattern="[A-Za-z\s]{3,}" title="This is not a name"/>
				   </div>
				   
				   <div class="mb-3">
				     <label for="mname" class="form-label">Mother Name:</label>
				      <input type="text" id="mname" name="mname" class="form-control" placeholder="Enter Employee Mother Name" required pattern="[A-Za-z\s]{3,}" title="This is not a name"/>
				   </div>
				   
				   <div class="mb-3">
				     <label  class="form-label">Gender:</label>
				      <input type="radio" class="form-check-input" name="gender" value="male"/> Male &nbsp;  &nbsp;  &nbsp; 
					  <input type="radio" class="form-check-input" name="gender" value="female"/> Female &nbsp;  &nbsp;  &nbsp;  &nbsp; 
					  <input type="radio" class="form-check-input" name="gender" value="other"/> Other
				   </div>
				   
				    <div class="mb-3">
				     <label for="mname" class="form-label">Date Of Birth:</label>
				      <input type="date" id="date" name="dob" class="form-control" max="2006-01-01" required />
				   
				   <div class="mb-3">
				     <label for="email" class="form-label">Email:</label>
				      <input type="email" id="email" name="email" class="form-control" placeholder="Enter Employee Email" required />
					  </div>
					  
				    <div class="mb-3">
					  <label for="password" class="form-label">Password:</label>
				      <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" minlength="8"  maxlength="16" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$" required />
					  <p class="text-success" style="font-size:12px;">Atleast one uppercase one symbol one digit and min length 8 max length 16</p>
				  </div>
				   
				  <div class="mb-3">
				     <label for="mobile" class="form-label">Mobile:</label>
				      <input type="tel" id="mobile" name="mobile" class="form-control" placeholder="Enter Employee Mobile No" required pattern="[6-9][0-9]{9}" title="This is not Mobile No." /> 
				   </div>
				   
				   <div class="mb-3">
							<select name="dep_id" class="form-select" required >
								<option selected disabled value="">---Select Department--</option>
								<?php 
									$q="select * from tbl_department";
									$resd=mysqli_query($con,$q);
									while($rowd=mysqli_fetch_array($resd))
									{
										?>
										
										
										<option value="<?php  echo $rowd["dep_id"]; ?>"> <?php  echo $rowd["department"]; ?>   </option>
										
										
										
								<?php		
										
									}
								?>
							</select>
				   </div>
				   
				  <div class="mb-3">
				     <label for="mname" class="form-label">Address:</label>
				     <textarea class="form-control" name="address" id="address" placeholder="Enter Employee Address" required></textarea>
				   </div>
				   
				  <div class="mb-3">
				    <label for="photo" class="form-label">Photo</label>
					<input type="file" id="photo" name="photo" class="form-control" placeholder="Uploade photo" required/>
				   </div>
				 
				  <div class="mb-3 d-grid">
				   <input type="submit" class="btn btn-primary btn-lg" />
				  </div>
				   
				   
                </div>
           </form>
        </div>
 </div>























                















                <!--  =============================Content End here   ==========================    -->



                <?php include 'assets/includes/footer.php'; ?>
                <?php   include 'assets/includes/footerlink.php';  ?>
  </main>
</body>