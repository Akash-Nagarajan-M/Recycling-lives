<!DOCTYPE html>
<html>
<head>
    <title>Forget password</title>
    <link rel="stylesheet" href="forg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
    session_start();
    if (isset($_SESSION['msg3'])) {    
        $x=$_SESSION['msg3'];
     }
    else{
        $x='';
    }
    ?>
    <header>
        <video src="particles.mp4" muted="" autoplay=""></video>
        <h2>Fo<span>r</span>got <span>p</span>assword</h2>
    </header>
    <div class="container">
        <form action="forg3a.php" method="Post">
        <?php echo '<span style=color:grey;font-size:80%;margin-left:100px>'.$x.'</span>' ?><br>
        <span>Enter new password:<span><br>
        <input type="text" id="c1" name="c1" required><br>
        <span>Confirm password:</span><br>
        <input type="text" id="c2" name="c2" required><br>
        <input type="submit" id="sub" ><br>
       
        </form>
    </div>
   
</body>
</html>