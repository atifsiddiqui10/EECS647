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
{    $car_id = '5';
     $days = $_POST['days'];
     $location = $_POST['location'];
     $time = $_POST['time'];
     $date = $_POST['date'];
     $sql = "INSERT INTO Reservation (ID, No_of_days, Location, Pickup_time, Car_id, Pickup_date)
     VALUES ('' , '$days','$location','$time', $car_id, '$date')";
   
     $sql2 = "UPDATE Vehicle SET Available = 0 WHERE Car_id = $car_id";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     if (mysqli_query($conn, $sql2)) {
      echo "New record has been updated !";
   } else {
      echo "Error: " . $sql . ":-" . mysqli_error($conn);
   }

     mysqli_close($conn);
}
?>
