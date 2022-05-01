<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" href="dashboard.css">
        <link rel="stylesheet" href="contact.css">
    </head>
    <body>
    <script>
            function myFunction(x) {
                x.classList.toggle("change"); 
            }
    </script>
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
                            <li><a href="cart.php">Cart(<?php echo $count;?>)</a></li>
                            <li><a href="orders.php">My orders</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                </div></section>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30108.872011869687!2d72.83190712093567!3d19.386075700066552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7af9e446492c7%3A0x73883ad36adb5af8!2sJustdispose%20Recycling%20Pvt.Ltd.!5e0!3m2!1sen!2sin!4v1627718273840!5m2!1sen!2sin" 
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <div class="rcontent">
                    <h1>Contact Us</h1>
                    <p>Recycling Lives Pvt. Ltd.
<br><br>
<b>Facility I Address</b>:
<address>
103,104, 110,119 Arvind Industrial Estate,
<br>
Navghar, Vasai East, Dist. Palghar
<br>
Maharashtra - 401210 India. 
<br>
<b>Contact No</b> +91 1234456678
<br>
<b>Whatsapp </b>: +91 345678912
<br>
<b>Email</b> : recyclinglives09@gmail.com

</address><br>

<b>Facility II Address</b>:
<address><br>
Plot no. 43/5 , Kaddu Industrial Estate , 
<br>
Next to Jasraj Building No. 3 , Sativali phata ,
<br>
Vasai (East), Palghar Maharashtra- 401208. 
</address><br>
</p>
                </div>
                <footer>
                
                <p id="left"><i>RECYCLING LIVES</i></p>
                <p>For more details contact <br>
                    <a href="https://mail.google.com/mail/u/0/#inbox?compose=new">
                    recyclinglives09@gmail.com</a></p>
            </footer>  
            </body>
</html>