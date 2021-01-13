<?php
@ob_start();
session_start();
$_SESSION['name'] = null;
$_SESSION['password'] = null;
$_SESSION['lastname'] = null;
$_SESSION['role'] = null;
setcookie("cid",$user,time()+(0));      
header("location: login.php");
?>