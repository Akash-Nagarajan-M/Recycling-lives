<?php
session_start();
$con=mysqli_connect('localhost','root','','edispose');
$sub='Order details';
if(mysqli_connect_errno()){
    echo"<script>
    alert('Cannot connect to database');
    window.location.href='cart.php';
  </script>";
  exit();
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase'])){
        $query1="INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Email`,`Address`, `Pay_Mode`) 
        VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[email]','$_POST[address]','$_POST[pay_mode]') ";
        if(mysqli_query($con,$query1)){
            $Order_Id=mysqli_insert_id($con);
            $Status='IN PROGRESS';
            $query2="INSERT INTO `user_orders`(`Order_id`, `Item_Name`, `Price`, `Quantity`,`Status`) VALUES (?,?,?,?,?)";
            $stmt=mysqli_prepare($con,$query2);
            if($stmt)
            {
                $msg3='';
                mysqli_stmt_bind_param($stmt,"isiis",$Order_Id,$Item_Name,$Price,$Quantity,$Status);
                foreach($_SESSION['cart'] as $key=>$values)
                {
                    $Item_Name=$values['Item_Name'];
                    $Price=$values['Price'];
                    $Quantity=$values['Quantity'];
                    $msg3=$msg3.'Item Name:'."$Item_Name ".' Price: '." $Price ".'Quantity: '." $Quantity ".
                    '';
                    mysqli_stmt_execute($stmt);
                }
                $msg="Your order details:"."\r\n".
                "Name:$_POST[full_name] "."\r\n".
                "Order id: $Order_Id"."\r\n".
                "Details: $msg3"."\r\n".
                "You will get an email from the centre"."\r\n".
                "User your order id to check your order details.";
                $email='productcentre2@gmail.com';
                $msg1="Orders details:"."\r\n"."Name:$_POST[full_name]"."\r\n"." Phone no:$_POST[phone_no]"."\r\n".
                " Products:$msg3"."\r\n"."Email: ".$_POST['email']."\r\n"." Address: $_POST[address]";
                setcookie('Email',$_POST['email']);
                $mail=mail($email,'Order details',$msg1);
                if(mail($_POST['email'],$sub,$msg)){
                    unset($_SESSION['cart']);
                    echo"<script>
                    alert('Order Placed');
                    window.location.href='cart.php';
                </script>";   
                }
                }
            else{
                echo"<script>
                alert('SQL Query Prepare Error');
                    window.location.href='cart.php';
                </script>";
            }
        }
        else{
            echo"<script>
    alert('SQL Error');
    window.location.href='cart.php';
  </script>";
        }
    
    }
}
?>