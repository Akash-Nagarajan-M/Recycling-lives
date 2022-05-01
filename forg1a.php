<!DOCTYPE html>
<html>
    <head>
        <title>Check</title>
        <link rel="stylesheet" href="forg.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <header>
        <video src="particles.mp4" muted="" autoplay=""></video>
        <h2>Fo<span>r</span>got <span>p</span>assword</h2>
    </header>
        <?php
    session_start();
    if (isset($_SESSION['msg2'])) {    
        $x=$_SESSION['msg2'];
     }
    else{
        $x='';
    }
    ?>
<div class="container">
    <form action="forg2.php" method="POST">
    <?php echo '<span style=color:grey;font-size:80%;margin-left:100px>'.$x.'</span>' ?><br>
        <span id="n1">Enter the code:</span><br>
        <input type="text" id="a1" name="a1" required><br><br>
        <input type="submit"id="sub">
        <a href="forg.php">Return</a>
    </form>
</div>
</body>
</html>