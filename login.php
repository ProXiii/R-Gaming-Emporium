<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R Gaming Emporium</title>
    <link rel="stylesheet" href="/css/login.css">
    <link rel="icon" href="/images/design images/Toad_3D_Land.png">
</head>
<body>
    <header>
        <a href="index.php" class="logo">
            <img  src="/images/rgamingemporium-removebg-preview.png" alt="">
        </a>
        
    </header>
    <div class="center">
        <h1>Log In</h1>
        <hr>
        <form action="" method="post">
            <div class="details">

                <div class="txt_field">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="uname" required>
                </div>
                <div class="txt_field">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" name="password" required>
                </div>
                
            </div>
            <div class="rememberme">
                <input type="checkbox" name="rememberme" id="rememberme">
                Remember me on this computer?
            </div>
            <div class="button">
                <a href=""><input type="submit" value="Log In" name="login"></a>
            </div>
            <div class="no_acc">
                Don't have an account? <a href="registration.php">Sign up</a> 
            </div>
        </form>
        <img src="./images/design images/mariohand-removebg-preview.png" alt="">
    </div>
    <footer>
        <div class="company-info">
            <h5>R Gaming Emporium</h5>
            <p class="address">The Outlets,<br>
                Malvar, Batangas, <br>
                4233, Philippines</p>
        </div>
        <div class="contact" id="contact">
            <h5>EMAIL US</h5>
            <div class="contact-links">
                <p class="address">0977-983-642</p>
                <p class="address">rgamingemporium@gmail.com</p>
            </div>
        </div>
    </footer>
</body>
</html>