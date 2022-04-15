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
     $plate_no = $_POST['plate_num'];
     $car_type = $_POST['car_type'];
     $mileage = $_POST['mileage'];
     $price = $_POST['price_per_day'];
     $model = $_POST['model'];
     $pic = $_POST['pic'];

     $sql = "INSERT INTO Vehicle (Car_id, Plate_num, Car_type, Mileage, Price_per_day, Available, Model, PIC)
     VALUES ('$car_id', '$plate_no', '$car_type', '$mileage', '$price', '1' , '$model', '$pic')";
   
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }

     mysqli_close($conn);
}
?>
