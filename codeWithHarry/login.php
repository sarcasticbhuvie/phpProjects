
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

</head>
<body>
    
<div class="content" id="login_content">
        <div class="content-box login">
        <div class="signin-heading" style="color:red;">
        <?php
        if(isset($_REQUEST['msg']))
        {
            echo $_REQUEST['msg'];
        }
    ?>
            </div>
            <div class="signin-heading">
                <h1>Sign in</h1>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>        
            </div>
            <form action="logincode.php" method="POST" class="login-form">
                <p>or use username and password</p>
                <input type="text" placeholder="username" name="username" pattern="^[a-z_]{8,18}$" title="Must contain only lowercase letter(a-z) or underscore (_) and total 8-12 characters only"required>
                <input type="password" placeholder="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                <a href="#"><p>Forget your password</p></a>
                <input type="submit" value="sign in" class="submit">
            </form>
        </div>
        <div class="content-box signup-suggestion">
            <h2>Welcome My Friend</h2>
            <h3 style="color:rgba(0, 0, 0, 0.575)">Don't Have an Account</h3>
            <h4>Register With Us</h4>
            <a href="signup.php"><button id="register-btn">Sign up</button></a>
        </div>
    </div>
    <div class="container">
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    <script src="assets/script.js"></script>
</body>
</html>