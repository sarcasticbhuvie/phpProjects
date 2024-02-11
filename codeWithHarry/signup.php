
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="content" id="Signup_content">
            <div class="content-box login-suggestion">
                <h2>Welcome Back </h2>
                <h3 style="color:rgba(0, 0, 0, 0.575)">My Friend</h3>
                <h4>Already Registered</h4>
                <a href="login.php"><button id="login-btn">login</button></a>
            </div>
        <div class="content-box signup">
            <div class="signup-heading">
                <h1>Sign Up with</h1>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>        
            </div>
            <form action="signupcode.php" method="POST" class="signup-form">
                <p>or use email and password</p>
                <input type="text" placeholder="name" name="name">
                <input type="text" placeholder="username" name="username" pattern="^[a-z_]{8,18}$" title="Must contain only lowercase letter(a-z) or underscore (_) and total 8-12 characters only"required>
                <input type="email" name="email" id="email" placeholder="email">
                <input type="password" placeholder="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                <input type="submit" value="sign up" class="submit">
            </form>
        </div>
    </div>
    <div class="container">
    </div>
    <script src="assets/script.js"></script>
</body>
</html>