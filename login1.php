<?php
session_start();
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  } 
 
if(empty($_POST['g-recaptcha-response'])){
    header('location:login.php');
    $_SESSION['captcha']= "<h4>Please solve recaptcha";
    
    return false;
}
if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
    $secret="6Lf4rskbAAAAAM0y_3WkrA94nEqjB0dEVcd2hG4v";
    $userIP=$_SERVER['REMOTE_ADDR'];
    $response=file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret'.$secret.
    '&response='.$_POST['g-recaptcha-response'].'&remoteip='.$userIP);
    $data=json_decode($response);
    if($data->success){
        $_SESSION['captcha']="<h2>Data sent";
    }
   
    }

$username=test_input($_POST["user"]);
$password=test_input($_POST["pass"]);
$conn=mysqli_connect('localhost','root','','edispose') ;
$query="select *from login where username='$username' and password='$password' ";
$result=mysqli_query($conn,$query) ;
$_SESSION["un"]=$username;
$row=mysqli_fetch_array($result);
if($row['username']==$username && $row['password']==$password){
    $_SESSION['login']=true;
    header('location:dashboard.php');
}
else{
   
    $_SESSION['message']='login failed';
    header('location:login.php');
}
?>