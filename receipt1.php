<?php
$servername='mysql.eecs.ku.edu';
$username='m145s484';
$password='Keegae3z';
$dbname = "m145s484";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
  if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }

// if(isset($_POST['submit']))
// {  
    
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
//       $car_id = '5';
//      $days = $_POST['days'];
//      $location = $_POST['location'];
//      $time = $_POST['time'];
//      $sql = "INSERT INTO Reservation (ID, No_of_days, Location, Pickup_time, Car_id)
//      -- update to make availibility = 0 
//      VALUES ('' , '$days','$location','$time', $car_id)";
//      if (mysqli_query($conn, $sql)) {
//         echo "New record has been added successfully !";
//      } else {
//         echo "Error: " . $sql . ":-" . mysqli_error($conn);
//      }
//     }


    $Car_id = '5';
    $query = "SELECT * FROM Reservation WHERE Car_id = $Car_id";
    $answer=$conn->query($query);
    while($row = mysqli_fetch_assoc($answer)){
        
    }
?>