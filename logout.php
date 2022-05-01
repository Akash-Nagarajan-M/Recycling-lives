<?php
session_start();
session_unset();
session_destroy();
sleep(0.5);
header('location:login.php');
?>