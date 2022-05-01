<!DOCTYPE html>
<html>
<head>
    <title>Forget password</title>
    <link rel="stylesheet" href="forg.css">
</head>
<?php
    session_start();
    if (isset($_SESSION['msg1'])) {    
        $x=$_SESSION['msg1'];
     }
    else{
        $x='';
    }
    ?>
<body>
    <header>
        <video src="particles.mp4" muted="" autoplay=""></video>
        <h2>Fo<span>r</span>got <span>p</span>assword</h2>
    </header>
    <div class="container">
        <form action="forg1.php" method="Post">
        <?php echo '<span style=color:grey;font-size:80%;margin-left:100px>'.$x.'</span>' ?><br>
        <span>Enter email:<span><br>
        <input type="email" id="c1" name="c1" pattern=[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$ required><br>
        <input type="submit" id="sub" ><br>
        <a href="login.php" id="c2">Return to Login</a>
        </form>
    </div>
    <?php 
    session_unset();
    session_destroy();?>
</body>
</html>