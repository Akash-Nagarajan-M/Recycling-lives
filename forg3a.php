<?php
session_start();
$a1=$_POST["c1"];
$a2=$_POST["c2"];
if($a1!=$a2){
    $_SESSION['msg3']='Password mismatch';
    header("location:forg3.php");
}
else{
    $conn=mysqli_connect("localhost","root","","edispose");
    $query="Update login set password='$a1' where username='$_SESSION[username1]'";
    $query1="Update details set password='$a1' where username='$_SESSION[username1]'";
    $res=mysqli_query($conn,$query);
    $res1=mysqli_query($conn,$query1);
    header("location:login.php");

}
?>