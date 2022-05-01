<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
       <link rel="stylesheet" href="dashboard.css">
       <link rel="stylesheet" href="order.css">
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
                <div class="c1">
                    <h1>YOUR ORDERS</h1>
                    <div class="form">
                    <form  method="POST" >
                    <span>Enter your order id:</span><br>
                    <input type="number" name="id"><br>
                    <input type="submit" name="submit" >
                </form></div>
                <?php
                
                if(isset($_POST['submit'])){
                $conn=mysqli_connect('localhost','root','','edispose');
                
                $ord_id=$_POST['id'];
                $_SESSION['orderid']=$ord_id;
                $query1="Select *from user_orders where Order_id='$ord_id'";
                if ($result1 = $conn->query($query1)) {
                    echo '<div class="pos"><table   cellspacing="2" cellpadding="2"> 
                    <tr> 
                        <th> <font face="Arial">Order_id</font> </th> 
                        <th> <font face="Arial">Item_Name</font> </th> 
                        <th> <font face="Arial">Price</font> </th> 
                        <th> <font face="Arial">Quantity</font> </th> 
                        <th> <font face="Arial">Status</font> </th> 
                        <th> <font face="Arial">Cancel Order</font> </th> 
                        </tr>';
                    while ($row = $result1->fetch_assoc()) {
                        $field1name = $row["Order_id"];
                        $field2name = $row["Item_Name"];
                        $field3name = $row["Price"];
                        $field4name = $row["Quantity"];
                        $field5name = $row["Status"];
                        echo "<tr>
                        <td>$field1name</td>
                        <td>$field2name</td>
                        <td>$field3name</td>
                        <td>$field4name</td>
                        <td>$field5name</td>
                        <td><button onclick='cancel()'>Cancel</button></td>
                        </tr>";
                    }
                    echo '</div>';
                    echo "<script>
                    function cancel(){
                        var ans=confirm('Are you sure to cancel your order?');
                        if(ans){
                            alert('Your order is cancelled');
                            location.href='cancel.php';    
                        }
                    }</script>";
                   
                }}
                else{
                    //
                }
                ?>
                </div>
                <script>
                function myFunction(x) {
                    x.classList.toggle("change"); 
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