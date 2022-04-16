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
    <div style="float:left"><img style="display: flex; margin: 0px auto; max-width:50%; float:left; border-radius:10px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEenFLhhoz-KfFwnbomhaLIDN_BbOPmJpQQg&usqp=CAU" style="width: 60%; max-width: 100px; height: 50px;"  /> Nemesis Corp  </div>
 <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
   
  
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
        <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Nemisis Car Rentals.</h1>
    
</head>
<body>

    <!-- <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1> -->
    <div class="table-users">
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
           
          
    $value="Book me"

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
    $value="Booked";
} else {
    echo 'Available ' ;
   
}?>
</td>
   
   <form action="booking.php" method="POST"> 
   
  
    <input id="carid" type=hidden name="carid" value= "<?php echo $row['Car_id'] ?>"/>
   <td> <button value="book" name="book[]" type="submit" id="test" <?php if ($row['Available'] == 0){

   ?> $value= "Booked" disabled='disabled'<?php  } else { ?> $value="Book me"  <?php } ?>><?php echo $value ?></button>
   <td>
        
</tr>
  
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
    /* table {
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
} */
body {
  background-color: #91ced4;
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

.table-users {
  border: 1px solid #327a81;
  border-radius: 10px;
  box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
  max-width: calc(100% - 2em);
  margin: 1em auto;
  overflow: hidden;
  width: 100%;
}

table {
  width: 100%;
}
table td,
table th {
  color: #2b686e;
  padding: 10px;
}
table td {
  text-align: center;
  vertical-align: middle;
}
table td:last-child {
  font-size: 0.95em;
  line-height: 1.4;
  text-align: left;
}
table th {
  background-color: #daeff1;
  font-weight: 300;
}
table tr:nth-child(2n) {
  background-color: white;
}
table tr:nth-child(2n+1) {
  background-color: #edf7f8;
}

@media screen and (max-width: 700px) {
  table,
tr,
td {
    display: block;
  }

  td:first-child {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 100px;
  }
  td:not(:first-child) {
    clear: both;
    margin-left: 100px;
    padding: 4px 20px 4px 90px;
    position: relative;
    text-align: left;
  }
  td:not(:first-child):before {
    color: #91ced4;
    content: "";
    display: block;
    left: 0;
    position: absolute;
  }
  td:nth-child(2):before {
    content: "Name:";
  }
  td:nth-child(3):before {
    content: "Email:";
  }
  td:nth-child(4):before {
    content: "Phone:";
  }
  td:nth-child(5):before {
    content: "Comments:";
  }

  tr {
    padding: 10px 0;
    position: relative;
  }
  tr:first-child {
    display: none;
  }
}
@media screen and (max-width: 500px) {
  .header {
    background-color: transparent;
    color: white;
    font-size: 2em;
    font-weight: 700;
    padding: 0;
    text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
  }

  img {
    border: 3px solid;
    border-color: #daeff1;
    height: 100px;
    margin: 0.5rem 0;
    width: 100px;
  }

  td:first-child {
    background-color: #c8e7ea;
    border-bottom: 1px solid #91ced4;
    border-radius: 10px 10px 0 0;
    position: relative;
    top: 0;
    transform: translateY(0);
    width: 100%;
  }
  td:not(:first-child) {
    margin: 0;
    padding: 5px 1em;
    width: 100%;
  }
  td:not(:first-child):before {
    font-size: 0.8em;
    padding-top: 0.3em;
    position: relative;
  }
  td:last-child {
    padding-bottom: 1rem !important;
  }

  tr {
    background-color: white !important;
    border: 1px solid #6cbec6;
    border-radius: 10px;
    box-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
    margin: 0.5rem 0;
    padding: 0;
  }

  .table-users {
    border: none;
    box-shadow: none;
    overflow: visible;
  }
}
</style>