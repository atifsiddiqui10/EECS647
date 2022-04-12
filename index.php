<?php
// Initialize the session
session_start();
 
// // Check if the user is already logged in, if yes then redirect him to welcome page
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    
// }
 
// Include config file
require_once "config.php";
 
// // Define variables and initialize with empty values
// $username = $password = "";
// $username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if ($_POST["submit"]) {
    $id = key($_POST["submit"]);
    echo $id;
 }
?>