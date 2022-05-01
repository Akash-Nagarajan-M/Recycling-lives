<?php
session_start();
$x1=$_POST["a1"];

$x3=$_POST["a3"];
$x5=$_POST["a4"];
$x4=$_POST["city"];
$age=$_POST["a5"];


$conn=mysqli_connect("localhost","root","","edispose");
$q1="Update login set username='$x1' where username='$_SESSION[username2]'";

$q3="Update details set email='$x3' where username='$_SESSION[username2]'";
$q4="Update details set city='$x4' where username='$_SESSION[username2]'";
$q5="Update details set age='$age'where username='$_SESSION[username2]'";
$q6="Update details set address='$x5' where username='$_SESSION[username2]'";
$res1=mysqli_query($conn,$q1);
$res3=mysqli_query($conn,$q3);
$res4=mysqli_query($conn,$q4);
$res5=mysqli_query($conn,$q5);
$res6=mysqli_query($conn,$q6);

header("location:dashboard.php");

?>
