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
if(isset($_POST['submit']))
{    $car_id = $_POST['car_id'];
     $price = $_POST['price'];
     

     $sql = "UPDATE Vehicle SET Price_per_day = $price WHERE  Car_id = '$car_id'";
   
     if (mysqli_query($conn, $sql)) {
        echo "Record Price Updated!";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }

     mysqli_close($conn);
}
?>