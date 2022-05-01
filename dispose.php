<!DOCTYPE html>
<html>
    <head>
        <title>DISPOSE</title>
       <link rel="stylesheet" href="dispose.css">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <?php
    session_start();
    $msg='';
    
    if($_SESSION['login']){
        //
    }
    else{
        header('location:login.php');
    }

    ?>
    <body>
            <section class="top">
                <div class="container"  onclick="myFunction(this)" >
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
                </div>
               
            </section>
            <div class="dispose" >
                    <h1 id="top">DISPOSE</h1>
                    
                    <p id="qn">Select which one to dispose<br><p id="note">Note:Buying rate may differ</p></p>
                    
                    <div class="div1">
                        <h1>PLASTIC</h1>
                        <p>Buying rate per kg: &#8377 30</p>
                        <p>Dispose rate per kg : &#8377 20 </p> 
                        <img src="plastic.jfif" id="img1">
                        <button id="pldisp" onclick="plasticdisp()">Buy</button>
                        <button id="pldisp1" onclick="plasticdisp1()">Dispose</button>
                    </div>
                    <div class="div2">
                        <h1>PAPER</h1>
                        <p>Buying rate per kg: &#8377 8</p>
                        <p>Dispose rate per kg: &#8377 4.5</p>
                        <img src="paper.jfif" id="img2">
                        <button id="padisp" onclick="paperdisp()">Buy</button>
                        <button id="padisp1" onclick="paperdisp1()">Dispose</button>
                    </div>
                    <div class="div3">
                        <h1>WOOD</h1>
                        <p>Buying rate per kg: &#8377 10</p>
                        <p>Dispose rate per kg: &#8377 4.5</p>
                        <p>Make sure the wood is in good condition before placing an order for selling</p>
                        <img src="wood.jfif" id="img3">
                        <button id="wooddisp" onclick="wooddisp()">Buy</button>
                        <button id="wooddisp1" onclick="wooddisp1()">Dispose</button>
                    </div>
                </div>
                <div class="rot">
                   
                    <div class="plastic" id="plastic">
                        <div id="content1">
                        <span id="c">Enter the quantity of plastic  to buy:</span><br>
                        <select id="quan1"  required>
                            <option value="2">2kg</option>
                            <option value="5">5kg</option>
                            <option value="10">10kg</option>
                            <option value="20">20kg</option>
                            <option value="30">30kg</option>
                        </select>
                       <br>
                       <input type="submit" onclick="show()" id="sub1"></div>    
                        
                       <span id="printa">Thank you for ordering plastic  check your email for further updates</span>    
                    </div>
                    <div class="paper" id="paper">
                        <div id="content2">
                        <span id="c">Enter the quantity of paper  to buy:</span><br>
                        <select id="quan2" required>
                            <option value="2">2kg</option>
                            <option value="5">5kg</option>
                            <option value="10">10kg</option>
                            <option value="20">20kg</option>
                            <option value="30">30kg</option>
                        </select>
                       <br>
                       <input type="submit" onclick="show1()" id="sub1"></div>    
                       <span id="printb">Thank you for ordering paper check your email for further updates</span>    
                    </div>
                    <div class="wood" id="wood">
                        <div id="content3">
                        <span id="c">Enter the quantity of wood  to buy:</span><br>
                        <select id="quan3" required>
                            <option value="2">2kg</option>
                            <option value="5">5kg</option>
                            <option value="10">10kg</option>
                            <option value="20">20kg</option>
                            <option value="30">30kg</option>
                        </select>
                       <br>
                       <input type="submit" onclick="show2()" id="sub1"></div>    
                       <span id="printc">Thank you for ordering  wood check your email for further updates</span>    
                    </div>
                    <span id="print1" >Thank you for ordering for disposing plastic check your email for further updates</span>    
                    <span id="print2" >Thank you for ordering for disposing paper check your email for further updates</span>    
                    <span id="print3" >Thank you for ordering for disposing wood check your email for further updates</span>    
                    
                </div>
                <div class="foot">
                <footer>
                    <p id="left"><i>RECYCLING LIVES</i></p>
                    <span>For more details contact <br>
                        <a href="https://mail.google.com/mail/u/0/#inbox?compose=new">
                        recyclinglives09@gmail.com</a></span>
            </footer></div>
                <script src="dispose.js"> </script>
                
                        
    </body>
</html>