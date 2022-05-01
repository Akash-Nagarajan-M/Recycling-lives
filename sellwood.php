<?php
session_start();
$email1=$_SESSION['email2'];
$x=date('d-m-Y');
$sub='Scrap Order';
$conn=mysqli_connect('localhost','root','','edispose');
$msg1="Scrap order:"." \r\n".'Resource:Wood'."\r\n".
     'Mode:Dispose'."\r\n"."Date: $x"."\r\n"."ETA:2DAYS";
$msg2="Scrap order:"." \r\n".'Resource:Wood'."\r\n".
'Mode:Dispose'."\r\n"."Date: $x"."\r\n"."Name: $_SESSION[username2]"."\r\n"."Address: $_SESSION[address2]"."\r\n".
"Customer Email: $_SESSION[email2]"."\r\n"."ETA:2DAYS";     
mail($email1,$sub,$msg1);
$query1="Select city from details where username='$_SESSION[username2]'";
$result=mysqli_query($conn,$query1);
$res=mysqli_fetch_array($result);
if($res[0]=='Chennai'){
    mail('unitchennai@gmail.com',$sub,$msg2);
}
else if($res[0]=='Mumbai'){
    mail('unitmumbai4@gmail.com',$sub,$msg2);
}
header('location:dispose.php');    
?>