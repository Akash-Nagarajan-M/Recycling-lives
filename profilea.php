<?php
session_start();
$conn=mysqli_connect("localhost","root","","edispose");
$query="select * from details where username='$_SESSION[un]'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
$_SESSION["username2"]=$row['username'];
$_SESSION["password2"]=$row['password'];
$_SESSION["email2"]=$row['email'];
$_SESSION["city2"]=$row['city'];
$_SESSION["age2"]=$row['age'];
$_SESSION["address2"]=$row['address'];
header("location:profile.php");
?>