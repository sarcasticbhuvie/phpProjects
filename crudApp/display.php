<?php
include 'connection.php';
$query="select * from tbl_crud";
$result=mysqli_query($con,$query);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-100 p-8">

    <div class="container mx-auto">
        <span class="text-2xl font-bold mb-4">User Data</span>
        <span class="text-xl text-green-800 flex justify-center mb-4">
            <?php
                if(isset($_REQUEST['msg']))
                {
                    echo $_REQUEST['msg'];
                }
            ?>
        </span>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Username</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Password</th>
                    <th class="py-2 px-4 border-b">Delete</th>
                    <th class="py-2 px-4 border-b">Edit</th>
                </tr>
            </thead>
            <tbody>
            <?php
                if($result){
                    while($row=mysqli_fetch_assoc($result)){  
            ?>
                <tr>
                    <td class="py-2 px-4 border-b"><?php echo $row['name'] ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $row['user'] ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $row['email'] ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $row['password'] ?></td>
                    <td class="py-2 px-4 border-b text-center"><a href="delete.php?id=<?php echo $row['sn'] ?>"><i class="fa-solid fa-trash"></a></i></td>
                    <td class="py-2 px-4 border-b text-center"><a href="edit.php?id=<?php echo $row['sn'] ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                </tr>
                <?php
            }
             }
            ?>
            </tbody>
        </table>
        <button type="button" name="button" class="bg-green-500 text-bold text-white py-2 px-4 rounded-md hover:bg-green-700 focus:outline-none focus:ring focus:border-blue-300">
               <a href="index.php"> Register Here</a>
            </button>
    </div>

</body>
</html>

            
            