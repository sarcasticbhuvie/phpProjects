<?php
	session_start();

    include 'connection.php';
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query="insert into tbl_crud(name,user,email,password) values ('$name','$username','$email','$password')";
        $result=mysqli_query($con,$query);
        if($result){
                $_SESSION['username']=$username;
			    header("location:index.php?msg=Registration successful");
        }
        else{
            echo "register again";
        }
    }
    else{

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register New User</title>
    <!-- Include the Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-semibold mb-4">Register New User</h2>
            <h3 class="text-xl text-red-900 font-semibold mb-4" ><?php
										if(isset($_REQUEST['msg']))
										{
											echo $_REQUEST['msg'];
										}
										?></h3>
        <form action="index.php" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md " required>
            </div>

            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
                <input type="text" id="username" name="username" class="mt-1 p-2 w-full border rounded-md " required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md " required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md " required>
            </div>

            <button type="submit" name="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                Register
            </button>

            <button type=button" name="button" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                <a href="display.php" >View User</a>
            </button>
        </form>
    </div>
</div>

</body>
</html>
