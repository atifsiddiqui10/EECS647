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
     $available = $_POST['available'];
     

     $sql = "UPDATE Vehicle SET Available = $available WHERE  Car_id = '$car_id'";
   
     if (mysqli_query($conn, $sql)) {
        echo "Record Updated!";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }

     mysqli_close($conn);
}
header("location: admin.php");
?>