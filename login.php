<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="login.css">
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header>
    <div class="head">
    <span class="first_text">Welcome to Recycling lives</span>
</div>
</header>
<script src="https://www.google.com/recaptcha/api.js" 
async defer ></script>
<?php
    session_start();
    if (isset($_SESSION['captcha'])) {    
        $x1=$_SESSION['captcha'];
     }
    else{
        $x1='';
    }
    if (isset($_SESSION['message'])) { 
        $x=$_SESSION['message'];
     }
    else{
        $x='';
    }
    
    ?>
<img src="logo.jpg" id='logo'>
<div class="container2">
    <h1>Login</h1>
    <?php echo "<p color:gold;style='font-size:10%;'>$x1<br><br></p>"?>
    <?php echo "<p color:gold;style='font-size:50%'>$x<br></p>"?>
    <form action="login1.php" method="post">
    <div class="box">
        <div class="left">
        <span id="a1">Username:</span><br><br>
        <span id="a2">Password:</span></div>
              
        <div class="right">
        <input type="text" id="user" name="user" required><br><br>
        <input type="password" id="pass" name="pass" required><br></div><br><br><br>
        <div class="g-recaptcha" data-sitekey="
            6Lf4rskbAAAAAN0G4GRDYJzY8_0NnpWHw-5rcy48" id="move"></div>
        <input type="submit" name="submit" id="sub"><br><br><br>
        <a id="q1"href="forg.php">Forgot password</a><br><br><br>

        <p id='n'>New to this site:</p>
        <a href="register.php" id="q2" >Register</a>
    </div>
    </form>
</div>
<?php 
session_unset();
session_destroy();?>
</body>
</html>