<?php
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>MARC</title>
	<style>
		.logo-box{
			height:100px;
			width:95%;
			border-radius:10px;
			margin:10px auto;
			display:flex;
			justify-content: center;
			align-items:center;
		}
		.innerlogobox{
			height:80px;
			width:80%;
			background-color:white;
			border-radius:200px;
			display:flex;
			justify-content: center;
			align-items:center;
		}
		.logotext{
			/* color:red; */
			font-weight:900;
			font-size:75px;
		}
	</style>
  </head>
<body style="background: rgb(5,9,75);
background: linear-gradient(45deg, rgba(5,9,75,1) 0%, rgba(14,87,31,0.908000700280112) 57%, rgba(255,0,1,1) 100%);" class="bg-success p-2 text-dark bg-opacity-10">
		<div class="col-sm-4 container">
	<h2 class="text-center text-white"  style="font-family: 'Times New Roman', serif; margin-top:60px;font-weight:600;" > MARC Laboratories Pvt. Ltd. </h2>
			<div style="border-radius:20px;" class="card mt-5">
				<div class="container card-body">
					<div class="container col-5 mt-4 bg-danger logo-box ">
						<div class="innerlogobox">
							<h1 class="logotext text-danger">MARC</h1>
	
						</div>
						<!-- <img src="logo.png" height="100" width= "100" style="margin-left:30px;"/> -->
					</div>
					<form action="logcode.php" method="post">
									<div class="mb-3">
										<h5 class="text-center text-danger">
										<?php
										if(isset($_REQUEST['msg']))
										{
											echo $_REQUEST['msg'];
										}
										?>
										</h5>
									</div>
									<div class="container mt-3">
										<label class="form-label"for="role">Select Role</label>
										<select class="form-select" name="role" id="role" required>
											<option disabled selected value="">---Select Your Role---</option>
											<option value="1">Admin</option>
											<option value="2">Employee</option>
										</select>
									</div>
									<div class="container mt-3">
										<label for="exampleInputEmail1" class="form-label">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required placeholder="Enter Email">
										<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
									</div>
									<div class="container mt-3">
										<label for="exampleInputPassword1" class="form-label">Password</label>
										<input type="password" class="form-control" id="exampleInputPassword1" name="password" required placeholder="Enter Password">
									</div>
									<div class="container mt-3 mb-4">
									<button type="submit" class="btn btn-primary form-control">Submit</button>
									</div>
					</form>
				</div>
			</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
  </body>
</html>