<?php
session_start();
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }  
$x1=test_input($_POST["a1"]);
$x2=test_input($_POST["a2"]);
$x3=test_input($_POST["a3"]);
$x5=test_input($_POST["a4"]);
$x4=test_input($_POST["city"]);
$age=test_input($_POST["a5"]);
$_SESSION["un"]=$x1;
$conn=mysqli_connect("localhost","root","","edispose");
$q="select username from login where username='$x1'";
$q4="select email from details where email='$x3'";
$res=mysqli_query($conn,$q);
$resa=mysqli_num_rows($res);
$res1=mysqli_query($conn,$q4);
$resa1=mysqli_num_rows($res1);
if($resa>0){
    $_SESSION['alr']="'$x1' already taken";
    header("location:register.php"); 
}
else if($resa1>0){
    $_SESSION['alr']="account with '$x3' already exists";
    header("location:register.php"); 
}
else{
    $q1="Insert into login(username,password) values('$x1','$x2')";
    $q2="Insert into details(username,password,email,city,age,address) values('$x1','$x2','$x3','$x4','$age','$x5')";
    $res1=mysqli_query($conn,$q1);
    $res2=mysqli_query($conn,$q2);
    header("location:dashboard.php");
}

?>
