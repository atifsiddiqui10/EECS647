<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <div style="float:left"><img style="display: flex; margin: 0px auto; max-width:50%; float:left; border-radius:10px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEenFLhhoz-KfFwnbomhaLIDN_BbOPmJpQQg&usqp=CAU" style="width: 80%; max-width: 300px; height: 50px;"  /> <h1 style="color:white; font-family:sans-serif; line-height:40px">NEMESIS CORP </h1> </div> -->
 <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
  <div style="color:white">
  
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
        <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Nemisis Car Rentals.</h1>
        
</div>
</head>
<body>
  

    <!-- <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1> -->
  <div class="container">
    <table id="table" border='1'>
    <thead>
    <tr>
    
    <th>Car_id </th>
    <th></th>
    <th>Model</th>
    <th>Plate Num</th>
    <th>Car Type</th>
    <th>Mileage</th>
    <th>Price per day</th>
    
    
    </tr>
  </thead>
   
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$mysqli = new mysqli("mysql.eecs.ku.edu", "m145s484", "Keegae3z", "m145s484");
/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}
$query="SELECT * from Vehicle";//get all the vehicles
$answer=$mysqli->query($query);
$Car_id= $Model = $Plate_num= $Car_type= $Mileage= $Price_per_day= "";


while($row = mysqli_fetch_assoc($answer)){
   
    $someNewVar[$row['Car_id']] = $row; 
    $value="Book me";

?>


<?php


 
?> 
<tbody>

<tr id="scdiv" >
<td id="scdiv" >     <?php echo $row['Car_id'] ?></td>
    <td name="PIC"><img width=200px style="border:3px solid darkblue"  src="<?php echo $row['PIC'] ?>"></td>
   
    <td> <?php echo $row['Model'] ?> </td>
    <td><?php echo $row['Plate_num'] ?> </td>
    <td><?php echo $row['Car_type'] ?> </td>
    <td><?php echo $row['Mileage'] ?> </td>
    <td>$<?php echo $row['Price_per_day'] ?> </td>
    <td>
        
    <?php
// get the product and stock level
if($row['Available'] == 0) {
    echo 'Not Available';
    $value="Booked";
} else {
    echo 'Available ' ;
   
}?>
</td>
   
   <form action="booking.php" method="POST"> 
   
  
    <input id="carid" type=hidden name="carid" value= "<?php echo $row['Car_id'] ?>"/>
   <td> <button value="book" name="book[]" type="submit" id="test" <?php if ($row['Available'] == 0){

   ?> $value= "Booked" disabled='disabled'<?php  } else { ?> $value="Book me"  <?php } //checks if car is available and if not available disable the button?>><?php echo $value ?></button>
   </td>
        
</tr>
   </tbody>

   </div>
<script>
      
</script>
</form>
<?php
}

?>

</body>


</html>

<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);


body, html {
  background-color: #91ced4;
  background:url('pic.jpg');

  height: 100%;
  width: 100%;
  background-repeat: no-repeat;
  background-size: cover;
}
body * {
  box-sizing: border-box;
}

.header {
  background-color: #327a81;
  color: white;
  font-size: 1.5em;
  padding: 1rem;
  text-align: center;
  text-transform: uppercase;
}

img {
  border-radius: 50%;
  height: 60px;
  width: 60px;
}
.container{
  width: 100%;
}
table{
  color:white;
  font-weight: bold;
font-style: italic;
  
  
  border: 5px solid #327a81;
  backdrop-filter: blur(20px);
  
  box-shadow: 5px 5px 0 rgba(0, 0, 0, 0.1);
  /* max-width: calc(100% - 2em); */
font-size:22px;
  width: 100%;

}
table th{
  
  background-color:darkblue;
}
</style>