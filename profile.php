<!DOCTYPE html>
<html>
<head>
<title>My Profile</title>
<link rel="stylesheet" href="profile.css">
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
               
    <header>
        <div>
            <h1>My Profile</h1>
        </div>
    </header>
    <div class="a">
        <form action='profile1.php' method="POST" >
        <span>Username:</span><br>
        <input type="text" id="a11" name="a1"  value="<?php echo $_SESSION["username2"]?>" disabled><br>
        
        <span>Email id:</span><br>
        <input type="text" id="a3" name="a3" value="<?php echo $_SESSION["email2"]?>"><br>
        <span>City:</span>
        <div class="right">
            <span>Age:</span><br>
            <input type="number" id="a5" name="a5" value="<?php echo $_SESSION["age2"]?>"><br>
        </div><br>
        <input list="city" name="city" id="city1" value="<?php echo $_SESSION["city2"]?>">
         <datalist id="city" name="city" >
            <option value="Chennai">
            <option value="Mumbai">
         </datalist><br>
        <span>Address:</span><br>
        <textarea  id="a41" name="a4" ><?php  echo $_SESSION["address2"]?></textarea>
        <br><br>
        <input type="submit" id="sub" value="Change details"><br><br>
        
        <br>
        </form>
    </div>
    <script>
                function myFunction(x) {
                    x.classList.toggle("change"); 
                }
    </script>
      <footer id="foot">
                
                <p id="left"><i>RECYCLING LIVES</i></p>
                <p>For more details contact <br>
                    <a href="https://mail.google.com/mail/u/0/#inbox?compose=new">
                    recyclinglives09@gmail.com</a></p>
            </footer>    
  
</body>
</html>
