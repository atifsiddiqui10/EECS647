<?php
session_start();
$_SESSION = array();
session_destroy();//destroy the session here
header("location: login.php");//reload to login page
exit;
?>