<?php
session_start();
$conn=mysqli_connect('localhost','root','','edispose');
$ord_id=$_SESSION['orderid'];
$query="Delete from user_orders where Order_id=$ord_id";
$query2="Delete from order_manager where Order_id=$ord_id";
$query1="Select *from user_orders where Order_id='$ord_id'";
if ($result1 = $conn->query($query1)) {
    while ($row = $result1->fetch_assoc()) {
        $field1name = $row["Order_id"];
        $field2name = $row["Item_Name"];
        $field3name = $row["Price"];
        $field4name = $row["Quantity"];
        $field5name = $row["Status"];}}
$msg1="Your order with order id: $ord_id is cancelled.". "\r\n"."Date:".date('d-m-Y')."\r\n"."If not done by you mail 
@recyclelives09@gmail.com. Thank you";
$msg2="Customer with order id: $ord_id has cancelled his order.";
mail($_COOKIE["Email"],'Order cancelled',$msg1);
mail('productcenter2@gmail.com','Order cancelled',$msg2);
$a=mysqli_query($conn,$query);
$b=mysqli_query($conn,$query2);
header('location:orders.php');
?>