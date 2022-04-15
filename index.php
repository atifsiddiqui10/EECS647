<?php
$servername='mysql.eecs.ku.edu';
$username='m145s484';
$password='Keegae3z';
$dbname = "m145s484";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
  if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

     $carid = $_POST['car_id'];
    
     echo $carid;
     mysqli_close($conn);

?>