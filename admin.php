<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
 
// Include config file
require_once "config.php";
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
            background-image: url("https://media.istockphoto.com/photos/close-up-of-a-man-receiving-new-car-key-picture-id628453996?b=1&k=20&m=628453996&s=170667a&w=0&h=RXUMWirsHCnXSCuu4IzGYqoE9E8ijOYE8oTmEA_-05Q=");
            background-color: lightblue;
            background-repeat: no-repeat;
            background-size:cover;
            max-width : 100%;
            
                 
        }
    </style>
</head>
<body>
<center>
<div class="header">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEenFLhhoz-KfFwnbomhaLIDN_BbOPmJpQQg&usqp=CAU" alt="logo" />
  <h2 style="color:black; font-family:sans-serif;">Nemesis Corps</h2>
  <p2 style="color:black; font-family:sans-serif;">Admin view</p2>
<style>2
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
<p>
    <a href="logout.php" class="btn btn-danger ml-3", style = "float: right; color:black" >Sign Out</a>
</p>

<div class="wrapper", style="width: 40%; height: 50%; float: left;">
        <div class="container-fluid"style="background-color:white">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                    </div>
                        <form action="InsertVehicle.php" method="post">
                            <div class="form-group">
                                <label><h3>Add Vehicle</h3></label>
                            </div>
                            <div class ="form-group">
                                <label> Car ID: </label>
                                <input type="number" name="car_id" class="form-control", required>
                            </div>
                            <div class ="form-group">   
                                <label> Plate Number: </label>
                                <input type="text" name="plate_num" class="form-control", required>
                            </div>
                            <div class = "form-group">
                                <label> Car type: </label>
                                <input type="text" name="car_type" class="form-control", required>
                            </div>
                            <div>
                                <label>Mileage: </label>
                                <input type="number" name="mileage" class="form-control", required> 
                            </div>
                            <div>
                                <label> Price Per Day: </label>
                                <input type="number" name="price_per_day" class="form-control", required>
                            </div>
                            <div>
                                <label> Model: </label>
                                <input type="text" name="model" class="form-control", required>
                            </div>
                            <div>
                                <label> pic: </label>
                                <input type="link" name="pic" class="form-control", required>
                            </div>
                            <br> 
                            <input type="submit" class="btn btn-primary" name="submit" value="Add Car">
                            </div>
                        </form>
                     </div>
                </div>        
        </div>
 </div>

 <div class="wrapper", style="margin-left: 50%; height: 100px;">
        <div class="container-fluid" style="background-color:white">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                    </div>
                        <form action="DeleteVehicle.php" method="post">
                            <div class="form-group">
                                <label><h3>Delete Vehicle</h3></label>
                            </div>
                            <div class ="form-group">
                                <label> Car ID: </label>
                                <input type="number" name="car_id" class="form-control", required>
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit" value="Delete Car">
                            </div>
                        </form>
                     </div>
                </div>        
        </div>
 </div>

 <div class="wrapper", style="margin-left: 50%; height: 100px;">
        <div class="container-fluid" style="background-color:white">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                    </div>
                        <form action="Available.php" method="post">
                            <div class="form-group">
                                <label><h3> Change Vehicle Status </h3></label>
                            </div>
                            <div class ="form-group">
                                <label> Car ID: </label>
                                <input type="number" name="car_id" class="form-control", required>
                            </div>
                            <div class ="form-group">
                                <label> Available: </label>
                                <input type="number" name="available" class="form-control", required>
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit" value="Update Car">
                            </div>
                        </form>
                     </div>
                </div>        
        </div>
 </div>

 <div class="wrapper", style="margin-left: 50%; height: 100px;">
        <div class="container-fluid" style="background-color:white">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                    </div>
                        <form action="changeprice.php" method="post">
                            <div class="form-group">
                                <label><h3>Change Vehicle Price</h3></label>
                            </div>
                            <div class ="form-group">
                                <label> Car ID: </label>
                                <input type="number" name="car_id" class="form-control", required>
                            </div>
                            <div class ="form-group">
                                <label> New Price: </label>
                                <input type="number" name="price" class="form-control", required>
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit" value="Change Car Price">
                            </div>
                        </form>
                     </div>
                </div>        
        </div>
 </div>

</body>
