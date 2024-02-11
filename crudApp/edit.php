<?php
// echo "edit";
include 'connection.php';
if(isset($_REQUEST['id'])){
    $id= $_REQUEST['id'];
    $query="select * from tbl_crud where sn='$id'";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($result);

}

if(isset($_POST['submit'])){
    $id=$_REQUEST['id'];
    // echo $id;
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="update tbl_crud set name='$name',user='$username',email='$email',password='$password' where sn=$id";
    // echo $query;
    $result=mysqli_query($con,$query);
    if($result){
        header("Location:display.php?msg=User Record updated successfully");
    }
else{
    header("Location:display.php?msg=Record not updated");
    
}

    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-100">

<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-semibold mb-4">Edit User Details</h2>
            <h3 class="text-xl text-red-900 font-semibold mb-4" >
            <?php
                if(isset($_REQUEST['id']))
                {
                    echo $_REQUEST['id'];
                    echo $row['sn'];
                }
            ?></h3>
        <form action="edit.php?id=<?php echo $row['sn'] ?>" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                <input type="text" value="<?php echo $row['name'] ?>" id="name" name="name" class="mt-1 p-2 w-full border rounded-md ">            </div>

            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
                <input type="text" value="<?php echo $row['user'] ?>" id="username" name="username" class="mt-1 p-2 w-full border rounded-md ">            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                <input type="text" value="<?php echo $row['email'] ?>" id="email" name="email" class="mt-1 p-2 w-full border rounded-md ">            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                <input type="text" value="<?php echo $row['password'] ?>" id="password" name="password" class="mt-1 p-2 w-full border rounded-md ">
            </div>

            <button type="button" name="button" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                <a href="display.php">Go Back</a>
            </button>

            <button type="submit" name="submit" class="bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600 focus:outline-none focus:ring focus:border-blue-300">
               Save Changes
            </button>
        </form>
    </div>
</div>

</body>
</html>