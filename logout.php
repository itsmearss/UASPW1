<?php 
//membunuh session
session_start();
$_SESSION = [];
session_unset();
session_destroy();

//membunuh cookie
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

//memaksa user ke halaman login
header("Location: login.php");
exit;
?>