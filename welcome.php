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
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
   
  
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
        <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Nemisis Car Rentals.</h1>
    
</head>
<body>

    <!-- <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1> -->
    <table id="table" border='1'>
    <tr>
    <th></th>
    <th>Car_id </th>
    <th>Model</th>
    <th>Plate Num</th>
    <th>Car Type</th>
    <th>Mileage</th>
    <th>Price per day</th>
    
    
    </tr>
   
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
$query="SELECT * from Vehicle";
$answer=$mysqli->query($query);
$Car_id= $Model = $Plate_num= $Car_type= $Mileage= $Price_per_day= "";


while($row = mysqli_fetch_assoc($answer)){
	// echo "<tr>";
            
    $someNewVar[$row['Car_id']] = $row; 
    //         echo "<td>" . $row['Model'] . "</td>";
    //         echo "<td>" . $row['Plate_num'] . "</td>";
    //         echo "<td>" . $row['Car_type'] . "</td>";
    //         echo "<td>" . $row['Mileage'] . "</td>";
    //         echo "<td> $" . $row['Price_per_day'] . "</td>";
           
          


?>


<?php


 
?> 


<tr id="scdiv">
<td id="scdiv" >     <?php echo $row['Car_id'] ?></td>
    <td name="PIC"><img width=120px  src="<?php echo $row['PIC'] ?>"></td>
   
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
} else {
    echo 'Available ' ;
   
}?>
</td>
   
   <form action="booking.php" method="POST"> 
   
  
    <input id="carid" type=hidden name="carid" value= "<?php echo $row['Car_id'] ?>"/>
   <td> <button value="book" id=" " name="book[]" type="submit" >Book me</button>
   <td>
        
</tr>
</form>
<?php
}

?>
   


</body>


</html>

<style>
    table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 1.5em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
 th, td {
    padding: 12px 15px;
}
tbody tr {
    border-bottom: 1px solid #dddddd;
}

tbody tr:nth-of-type(even) {
    
}

tbody tr:last-of-type {
    
}
tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
</style>