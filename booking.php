<?php
<<<<<<< HEAD:booking.php
    // Initialize the session
    session_start();
    
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
=======
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
>>>>>>> 03ee5f78926b14d32353217a03642d3d49882481:booking.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
<h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. BOOK YOUR CAR HERE.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
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
        
        $Car_id = $_POST['carid'];
        $query = "SELECT * FROM Vehicle WHERE Car_id = $Car_id";
        $answer=$conn->query($query);
        while($row = mysqli_fetch_assoc($answer)){
    
 ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                    </div>
                    <form action="Insert_Reservation.php" method="post">
                        <div class="form-group">
                            <label>Your Personal Vehicle!!!!</label>
                            <img style="text-align: center; display: flex; left: 50; right: 50; width: 100%; height: 50%;" src="<?php echo $row['PIC']; ?>">
                            <h2> Model: <?php echo $row['Model'];?> <br> Mileage: <?php echo $row['Mileage'];?> <br> Plate No: <?php echo $row['Plate_num'];?>
                               <br> Price: $<?php echo $row['Price_per_day'];?></h2>
                            <h1></h1>
                        </div>
                        <div class="form-group">
                            <label>Number of Days</label>
                            <input type="number" name="days" class="form-control" min ="1" max ="10", required>
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <select type="" name="location" class="form-control">
                                <option value = 'Daisy Hill'> Daisy Hill</option>
                                <option value = 'Meadowbrook'> Meadowbrook</option>
                                <option value = 'Mass Str'> Mass Str</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Time</label>
                            <input type="time" name="time" class="form-control" min="00:00" max="23:59" required >
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" required >
                        </div>
                        <input id="carid" type=hidden name="carid" value= "<?php echo $Car_id ?>"/>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
<?php
mysqli_close($conn);

        }
        ?>
</html>
       