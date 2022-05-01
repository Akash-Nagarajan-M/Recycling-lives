<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
       <link rel="stylesheet" href="dashboard.css">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        session_start();
        if($_SESSION['login']){
            //
        }
        else{
            header('location:login.php');
        }
        ?>
            <section class="top">
                <div class="container" onclick="myFunction(this)" >
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>               
                    <div class="dropdown1">
                    <ul id="w1">    
                        <li><a href="dashboard.php">Home</a><hr></li>
                        <li><a href="dispose.php">Dispose</a><hr></li>
                        <li><a href="diy products.php">Diy products</a><hr></li>
                        <li><a href="help.php">Help</a><hr></li>
                        <li><a href="contact.php">Contact Us</a><hr></li>
                    </ul></div>
                </div>
                <div class="ti">
                    <span id="a1" data-text="RECYCLING LIVES">RECYCLING LIVES</span>
                </div>
                <div class="drop">
                <ul>
                    <li>
                    <?php
                    $count=0;
                    if(isset($_SESSION['cart'])){
                        $count=count($_SESSION['cart']);
                    }?>
                        <a href="#" id="m1"> &#9759;My account</a>
                        <ul class="dropdown">
                            <li><a href="profilea.php">Profile</a></li>
                            <li><a href="cart.php">Cart(<?php echo $count; ?>)</a></li>
                            <li><a href="orders.php">My orders</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
               
                <div class="flow">
                <p><span id="e1"><i>RL token coming soon...</i></span></p></div>
                <section class="section1">
                    
                    <h2> <?php echo "Welcome back:".$_SESSION["un"] ?></h2>
		    <div class="container1" id="object">
                <div class="row">
                    <div id="box1" class="box"></div>
                    <div id="box2" class="box"></div>
                </div>
                <div class="row">
                    <div id="box3" class="box"></div>
                    <div id="box4" class="box"></div>
                </div>
                <div class="row">
                    <div class="circle"></div>
                </div>
                <div class="row">
			        <div id="line" class="line"></div>
                </div>
                <div class="row">
			        <div id="pot" class="pot"></div>
                </div>
		    </div>
            </section>
            
            <div class="bg">
            <div class="ti1">
                    <span id="a2" data-text="ABOUT US:">ABOUT US:</span>
                </div></div>
            <div class="slideshow">
               
            <div class="slideshow-container">
                
                <div class="mySlides fade">
                    <img src="help1.jpg" >
                </div>
                <div class="mySlides fade">
                <img src="help21.jpg" >
                </div>
                <div class="mySlides fade">
                    <img src="help3.jpg" >
                </div>
                <div class="mySlides fade">
                    <img src="help4.jpg" >
                </div>
            </div>
            <br>

            <div class='dot1'>
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
            </div>
            </div>
            </section>
                <script>
                function myFunction(x) {
                    x.classList.toggle("change"); 
                }
                var slideIndex = 0;
                showSlides();

                function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
                }
                </script>
                 <br><br><br><br><br>
            <footer>
                
                <p id="left"><i>RECYCLING LIVES</i></p>
                <p>For more details contact <br>
                    <a href="https://mail.google.com/mail/u/0/#inbox?compose=new">
                    recyclinglives09@gmail.com</a></p>
            </footer>         
    </body>
</html>