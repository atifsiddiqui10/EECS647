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
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<h1> NEMISIS CAR RENTAL SERVICE </h1>
<p>
    <a href="logout.php" class="btn btn-danger ml-3", style = "float: right; ">Sign Out</a>
</p>

<div class="wrapper", style="width: 40%; height: 80%; float: left;">
        <div class="container-fluid">
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
        <div class="container-fluid">
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
        <div class="container-fluid">
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
        <div class="container-fluid">
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