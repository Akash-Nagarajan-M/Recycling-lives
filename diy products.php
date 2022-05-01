<!DOCTYPE html>
<html>
    <head>
        <title>DIY PRODUCTS</title>
       <link rel="stylesheet" href="diy.css">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <?php 
    session_start();
    ?>
    <body>
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
                    }
                    
                    ?>
                        <a href="#" id="m1"> &#9759;My account</a>
                        <ul class="dropdown">
                            <li><a href="profilea.php">Profile</a></li>
                            <li><a href="cart.php">Cart(<?php echo $count;?>)</a></li>
                            <li><a href="orders.php">My orders</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
            </section>
                <div class="cont1">
                    <h1>DIY PRODUCTS</h1>
                </div>
                <div class="prod1">
                <form action="manage_cart.php" method="POST">    
                <div class="left" >
                    <img src="vaccum-cleaner.jpg" id="img1" >
                    </div>
                    <div class="right">
                    
                    <h1>VACCUM CLEANER:</h1><hr>
                    <span>Price: &#8377 4000</span><br><hr>
                    <span><b>Description:</b></span>
                    <p >Two power modes
                    Switch between MAX mode for up to 7 minutes of high power, and Powerful mode for longer cleaning.
                    Up to 40 minutes of fade-free suction2
                    Powerful suction for whole-home cleaning.</p>
                    
                 
                      <button type="submit" name="Add_to_cart" class="sub"  >Add to cart</button>
                      <input type="hidden" name='Item_name' value="Vaccum cleaner">
                      <input type="hidden" name='Price' value="4000">
                      
                    </form>
                    </div>
                </div>
                
                <div class="prod2">
                <form action="manage_cart.php" method="POST">
                    <div class="left">
                        <img src="tent.jpg" id="img2">
                    </div>
                    <div class="right">
                    
                        <h1>FOLDABLE TENT</h1><hr>
                        <span>Price: &#8377 6000</span><br><hr>
                        <span><b>Description:</b></span>
                        <p >The tug tent is an outdoor concept based on a smart mechanism. To built up the tent you simply 
                            need to pull on its fabric. Thereby the frame will unfold creating a steady body joined by the fabric.
                             Since the frame is repairable this solution is not just practical but as well sustainable.</p>
                    <button type="submit" name="Add_to_cart" class="sub"  >Add to cart</button>
                    <input type="hidden" name="Item_name" value="Foldable Tent">
                    <input type="hidden" name="Price" value="6000">
                </form>
                    </div>
                </div>
                <div class="prod3">
                    <form action="manage_cart.php" method="Post">
                    <div class="left">
                        <img src="furniture.jpg" id="img3">
                    </div>
                    <div class="right">
                        <h1>SEAT AND CABINET FURNITURE SYSTEM</h1><hr>
                        <span>Price: &#8377 12000</span><br><hr>
                        <span><b>Description:</b></span>
                        <p >A modular furniture that can be used as a stool, bench, wardrobe, book column or simply as a box.
                             Discarded climbing ropes from the climbing halls in the Alpine region are not only an aesthetic element,
                              they also act as connectors for the four non-glued solid wood sides. Flexible, individual, mobile and 
                              at the same time sustainable.   The Hochstapler has properties that meet the requirements of a modern society. 
                              </p>
                     
                 
                    <button type="submit" name="Add_to_cart" class="sub"  >Add to cart</button>
                    <input type="hidden" name="Item_name" value="Furniture">
                      <input type="hidden" name="Price" value="12000">
                </form>
                    </div>
                </div>
                <script>
                    document.getElementById("img1").addEventListener("mouseover", mouseOver);
                    document.getElementById("img1").addEventListener("mouseout", mouseOut);
                    document.getElementById("img2").addEventListener("mouseover", mouseOver1);
                    document.getElementById("img2").addEventListener("mouseout", mouseOut1);
                    document.getElementById("img3").addEventListener("mouseover", mouseOver2);
                    document.getElementById("img3").addEventListener("mouseout", mouseOut2);
                function myFunction(x) {
                    x.classList.toggle("change"); 
                }
                function mouseOver(){
                    document.getElementById("img1").style.marginLeft="50px";
                    document.getElementById("img1").style.transform="scale(1.2)";
                }
                function mouseOver1(){
                    document.getElementById("img2").style.marginLeft="50px";
                    document.getElementById("img2").style.transform="scale(1.2)";
                }
                function mouseOver2(){
                    document.getElementById("img3").style.marginLeft="50px";
                    document.getElementById("img3").style.transform="scale(1.2)";
                }
                function mouseOut(){   
                    document.getElementById("img1").style.marginLeft="0px";
                    document.getElementById("img1").style.transform="scale(1)";
                }
                function mouseOut1(){   
                    document.getElementById("img2").style.marginLeft="0px";
                    document.getElementById("img2").style.transform="scale(1)";
                }
                function mouseOut2(){   
                    document.getElementById("img3").style.marginLeft="0px";
                    document.getElementById("img3").style.transform="scale(1)";
                }
              
                </script>
                <footer>         
                <p id="left"><i>RECYCLING LIVES</i></p>
                <p>For more details contact <br>
                    <a href="https://mail.google.com/mail/u/0/#inbox?compose=new">
                    recyclinglives09@gmail.com</a></p>
            </footer>    
    </body>
</html>