<?php
$msg = '';
require_once('processRegister.php')

?>


<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        <div class="card bg-danger text-white text-center">
            <div class="card-header">
                <span>Zalego| Admin Register</span>
            </div>
        </div>    
    </div>   

    <div class="col-lg-6 offset-lg-3">
    <span></span>
    <img src="images/zalegoicon.png"  width="100" height="100" alt="logo" class="mx-auto d-block rounded-circle">
        <span><?php echo $msg ?></span>
    <div class="card">
        <div class="card-body">
        <form action="register.php" method="POST" class="form-group" autocomplete="of">
            <div class="justify-content-center align-items-center">
                <label for="Username">Username:</label> <br>
                <input type="text" name="username" id="username">
                <br>
        
                <label for="Email">Email:</label> <br>
                <input type="email" name="email" id="email">
                <br>
                
                <label for="Password">Password:</label> <br>
                <input type="text" name="password" id="password">
                <br>
        
                <label for="Confirm password">Confirm passwordUsername:</label> <br>
                <input type="text" name="confirmpassword" id="confirmpassword">
                <br>
                <br>
        
                <button type="submit" name="signUp" style="background-color: purple; color: #fff;">Submit</button>
                <br>
                <br>

                <p>Have account? Sign in <a href="login.php" style="color: purple;">Here</a></p>

            </div>
        </form>
        </div>
    </div>    
    
  


<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>