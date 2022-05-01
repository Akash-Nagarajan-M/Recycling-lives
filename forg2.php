<?php
session_start();
$a1=$_POST["a1"];

if($a1==$_SESSION["passcode"]){
    header("location:forg3.php");
}
else{
    $_SESSION['msg2']='Enter correct code';
    header("location:forg1a.php");
}
?>