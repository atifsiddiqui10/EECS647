<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: emplogin.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
        
        body
        {   
            background-image: url("https://images.hdqwalls.com/wallpapers/audi-headlights-wide.jpg");
            /* background-image: url("https://www.99images.com/download-image/829356/5000x2812"); */
            /* background-color: lightblue; */
            max-width:100%;
            max-height:100%;
            background-repeat: no-repeat;
            background-size:cover;
            background-position: center;
            
                 
        }
    </style>
    <style>
        .bgimg {
        background-image: url('https://images.hdqwalls.com/wallpapers/audi-headlights-wide.jpg');
        max-width:100%;
        max-height:100%;
        }
    </style>
    
</head>
<body>
<center>
<div class="header" style="background-color:white;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEenFLhhoz-KfFwnbomhaLIDN_BbOPmJpQQg&usqp=CAU" alt="logo" style="width: 150px; max-width: 200px; height: 100px;"/>
  <h1 style="color:black; font-family:sans-serif;"><strong> NEMESIS CORP </strong></h1>
  <h3 style="color:black; font-family:sans-serif;">ADMIN VIEW</h3>
  <a href="logout.php" class="btn btn-danger ml-3", style = "float: right; color:black" >Sign Out</a>
<style>
    .h{
        font-family: Arial, Helvetica, sans-serif;
    }

    .header img {
    float: center;
    width: 100px;
    height: 100px;
    background: #555;
    }

    .header h1 {
    position: relative;
    top: 18px;
    left: 10px;
    }
</style>

    

</div>
</center>

<div class="bgimg">

<div class="wrapper", style="width: 40%; height: 50%; float: left;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- <div class="page-header">
                    </div> -->
                        <form action="InsertVehicle.php" method="post" style="">
                            <div class="form-group">
                                <label><h3 style="color: white;">Add Vehicle</h3></label>
                            </div>
                            <div class ="form-group">
                                <label style="color: white;"> Car ID: </label>
                                <input type="number" name="car_id" class="form-control", required>
                            </div>
                            <div class ="form-group">   
                                <label style="color: white;" > Plate Number: </label>
                                <input type="text" name="plate_num" class="form-control", required>
                            </div>
                            <div class = "form-group">
                                <label style="color: white;"> Car type: </label>
                                <input type="text" name="car_type" class="form-control", required>
                            </div>
                            <div>
                                <label style="color: white;" >Mileage: </label>
                                <input type="number" name="mileage" class="form-control", required> 
                            </div>
                            <div>
                                <label style="color: white;" > Price Per Day: </label>
                                <input type="number" name="price_per_day" class="form-control", required>
                            </div>
                            <div>
                                <label style="color: white;" > Model: </label>
                                <input type="text" name="model" class="form-control", required>
                            </div>
                            <div>
                                <label style="color: white;" > pic: </label>
                                <input type="link" name="pic" class="form-control", required>
                            </div >
                            <br> 
                            <input type="submit" class="btn btn-danger" name="submit" value="Add Car">
                            </div>
                        </form>
                     </div>
                </div>        
        </div>
 </div>

 <div class="wrapper", style="margin-left: 50%; height: 100px;">
        <div class="container-fluid" style="opacity:1.9;">
            <div class="row">
                <div class="col-md-12">
                    <!-- <div class="page-header">
                    </div> -->
                        <form action="DeleteVehicle.php" method="post">
                            <div class="form-group">
                                <label><h3 style="color: white;">Delete Vehicle</h3></label>
                            </div>
                            <div class ="form-group">
                                <label style="color: white;"> Car ID: </label>
                                <input type="number" name="car_id" class="form-control", required>
                            </div>
                            <input type="submit" class="btn btn-danger" name="submit" value="Delete Car">
                            </div>
                        </form>
                     </div>
                </div>        
        </div>
 </div>

 <div class="wrapper", style="margin-left: 50%; height: 100px;">
        <div class="container-fluid" style="opacity:1.9;"  >
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                    </div>
                        <form action="Available.php" method="post">
                            <div class="form-group">
                                <label><h3 style="color: white;"> Change Vehicle Status </h3></label>
                            </div>
                            <div class ="form-group">
                                <label style="color: white;"> Car ID: </label>
                                <input type="number" name="car_id" class="form-control", required>
                            </div>
                            <div class ="form-group">
                                <label style="color: white;"> Available: </label>
                                <input type="number" name="available" class="form-control", required>
                            </div>
                            <input type="submit" class="btn btn-danger" name="submit" value="Update Car">
                            </div>
                        </form>
                     </div>
                </div>        
        </div>
 </div>

 <div class="wrapper", style="margin-left: 50%; height: 100px;">
        <div class="container-fluid" style="opacity:1.9;" >
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                    </div>
                        <form action="changeprice.php" method="post">
                            <div class="form-group">
                                <label><h3 style="color: white;">Change Vehicle Price</h3></label>
                            </div>
                            <div class ="form-group">
                                <label style="color: white;"> Car ID: </label>
                                <input type="number" name="car_id" class="form-control", required>
                            </div>
                            <div class ="form-group">
                                <label style="color: white;"> New Price: </label>
                                <input type="number" name="price" class="form-control", required>
                            </div>
                            <input type="submit" class="btn btn-danger" name="submit" value="Change Car Price">
                            </div>
                        </form>
                     </div>
                </div>        
        </div>
 </div>

</div>
</body>
</html>
