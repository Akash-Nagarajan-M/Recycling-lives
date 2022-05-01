<!DOCTYPE html>
<html>
<head>
<title>Registration form</title>
<link rel="stylesheet" href="register.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
    session_start();
    if (isset($_SESSION['alr'])) {    
        $x=$_SESSION['alr'];
     }
    else{
        $x='';
    }
    ?>
    <img src="logo.jpg" id='logo'>
    <header>
        <div>
            <h1>Registration form</h1>
        </div>
    </header>
    <div class="a">
        <form action='register1.php' method="POST" >
        <span>Username:</span><br>
        <input type="text" id="a1" name="a1" required ><br><?php echo '<span style=color:red>'.$x.'</span>' ?><br>
        <span>Password:</span><br>
        <input type="text" id="a2" name="a2" required><br>
        <span>Email id:</span><br>
        <input type="email" id="a3" name="a3" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required><br>
        <span>City:</span>
        <div class="right">
            <span>Age:</span><br>
            <input type="number" id="a5" name="a5" required><br>
        </div><br>
        <input list="city" name="city" id="city1" required>
         <datalist id="city" name="city" required>
            <option value="Chennai">
            <option value="Mumbai">
         </datalist><br>
        <span>Address:</span><br>
        <textarea id="a4" name="a4" required></textarea>
        <br><br>
        <input type="submit" id="sub"><br>
        <div class="down">
            <p>Already a member
            <a href="login.php">Log in</a></p></div>
        </form>

    </div>
  
</body>
</html>
