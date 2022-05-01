<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
       <link rel="stylesheet" href="dashboard.css">
       
       <link rel="stylesheet" href="cart.css">
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
                            <li><a href="cart.php">Cart(<?php echo $count;?>)</a></li>
                            <li><a href="orders.php">My orders</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
                <div class="c1">
                    <h1>YOUR CART</h1>
                    <table>
                    <tr>
                            <th>Serial No</th>
                            <th>Item Name</th>
                            <th>Item Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                        <?php
                        
                        if(isset($_SESSION['cart'])){
                         foreach($_SESSION['cart'] as $key=>$value){
                             
                             $sr=$key+1;
                            echo "
                             
                             <tr>
                                <td>$sr</td>
                                <td>$value[Item_Name]</td>
                                <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'</td>
                                <td>
                                <form action='manage_cart.php' method='POST'>
                                <input type=number class='iquantity' style='text-align:center' name='Mod_Quantity' onchange='this.form.submit()' value='$value[Quantity]' min='1' max='10'>
                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                </form>
                                </td>
                                <td class='itotal'></td>
                                <td>
                                <form action='manage_cart.php' method='POST'>
                                <button name='Remove_Item'>REMOVE</button>
                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                </form>
                                </td>
                                ";
                         }}
                        ?>
                    </table>
                    <div class="total">
                        <div class="de1">
                            
                                <h4>Grand Total:</h4>
                                <h5 id='gtotal'></h5><br>
                                <?php
                                    if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                                    {
                                ?>
                                <form action="purchase.php" method="POST">
                                    <div class="form-group">
                                        <label>Full name:</label><br>
                                        <input type="text" name="full_name" pattern="[a-zA-z]{1,}" required ><br>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone number:</label><br>
                                        <input type="text" name="phone_no" pattern="[0-9]{10}" required  ><br>
                                    </div>
                                    <div class="form-group">
                                        <label>Email id:</label><br>
                                        <input type="text" name="email"  required  ><br>
                                    </div>
                                    <div class="form-group">
                                        <label>Address:</label><br>
                                        <textarea name="address"></textarea>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="pay_mode" value="COD" required>
                                        <label>Cash On delivery</label> 
                                    </div>
                                    <button name="purchase">Make Purchase</button>
                                </form>
                                <?php 
                                    }
                                ?>

                        </div>
                    </div>
                </div>
                <script>
                function myFunction(x) {
                    x.classList.toggle("change"); 
                }
                var gt=0;
                var iprice=document.getElementsByClassName('iprice');
                var iquantity=document.getElementsByClassName('iquantity');
                var itotal=document.getElementsByClassName('itotal');
                var gtotal=document.getElementById('gtotal');

                function subTotal(){
                    gt=0;
                    for(i=0;i<iprice.length;i++){
                        itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
                        gt=gt+(iprice[i].value)*(iquantity[i].value);
                    }
                    gtotal.innerText=gt;
                }
                subTotal();
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