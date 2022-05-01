<?php
session_start();
$b1=$_POST["c1"];
$conn=mysqli_connect("localhost","root","","edispose");
$x=rand();
$query="Select username from details where email='$b1'";
$result=mysqli_query($conn,$query) ;
$res=mysqli_fetch_array($result);
$_SESSION['username1']=$res[0];
if($res==''){
    $_SESSION['msg1']='Enter correct email';
    header('location:forg.php');
}
else{
$_SESSION["passcode"]=$x;
$sub="passcode";
$msg="Hello ".$res[0] ." Here is your passocde for changing the password: ".$x;
$mail_sent=mail($b1,$sub,$msg);
header("location:forg1a.php");}
?>