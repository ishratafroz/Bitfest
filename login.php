<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
guestOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
     crossorigin="anonymous" />
	<!-- Custom Styling-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">


    <title>Login</title>
</head>
<body>

<?php include(ROOT_PATH ."/app/includes/header.php"); ?>
    
<div class="login-grad">
<div class="auth-content">
    <form action="login.php" method="post">
        <h2 class="form-title">Login</h2>
        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
        <div>
                    <label>Username</label>
                    <input type="text" name="username" value="<?php echo $username;?>" class="text-input" />
                </div>

                <div>
                    <label>Password</label>
                    <input type="password" name="password" value="<?php echo $password;?>" class="text-input" />
                </div>
                <div>
                    <input type="checkbox" id="remember" name="remember" value="1">
                    <label for="remember">Remember me</label><br>
                </div>
            
            <div>
                <button type="submit" name="login-btn" class="btn btn-big">Login</button>
            </div>

            <p>Or <a href="<?php echo BASE_URL . '/register.php'?>"><b> Sign Up</b></a></p>    
</form>
</div>
</div>
<!--//Footer-->
    <!-- JQuery -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Custom Script -->
<script src="assets/js/scripts.js"></script>


</body>
</html>