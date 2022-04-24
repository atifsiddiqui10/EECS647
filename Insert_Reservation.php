<?php
$servername='mysql.eecs.ku.edu';
$username='m145s484';
$password='Keegae3z';
$dbname = "m145s484";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
  if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }


if(isset($_POST['submit']))
{    $car_id =  $_POST['carid'];
     $days = $_POST['days'];
     $location = $_POST['location'];
     $time = $_POST['time'];
     $date = $_POST['date'];
     $email=$_POST['email'];
    //  echo $email;
     $sql = "INSERT INTO Reservation (ID, No_of_days, Location, Pickup_time, Car_id, Pickup_date, Email)
     VALUES ('' , '$days','$location','$time', $car_id, '$date', '$email')";
   
     $minuscar= "UPDATE Vehicle SET Available = 0 WHERE Car_id = $car_id";
     if (mysqli_query($conn, $sql)) {
      //   
        
         
        //  echo "Booking done here";

     }
     if (mysqli_query($conn, $minuscar)) {
        //   
          
           
          //  echo "Booking done here";
  
       }
   
   

     
   //   $var_amount = $answer1 * $answer2;
     


   $query="SELECT * FROM Reservation , Vehicle where Reservation.Car_Id=Vehicle.Car_Id AND Vehicle.Car_id=$car_id ";
   
   $query4="SELECT ID from Reservation";

   
   $answer1=$conn->query($query);
   $answer5=$conn->query($query4);
  
 //   $answer2 = $conn->query($query2);
 // echo($answer2);
 if($row1 = mysqli_fetch_assoc($answer1)){
   
   if($row5 = mysqli_fetch_assoc($answer5)){
   $Reservation=$row5['ID'];
   
    $var_amount = $row1['No_of_days'] *$row1['Price_per_day'];
    $model=$row1['Model'];
    $Price=$row1['Price_per_day'];
    $days=$row1['No_of_days'];
    $PIC=$row1['PIC'];
    $Plate=$row1['Plate_num'];
    $newdate=date('Y-m-d', strtotime($date."7 days"));
    // echo $newdate;
    $sql2 = "INSERT INTO Receipt (Receipt_id,Total_amount, State_tax, ID)
    VALUES ('',$var_amount,6.5, $Reservation)";
    //  $payment = "INSERT INTO Receipt (Receipt_id,Total_amount, State_tax, ID)
    //  VALUES ('',$var_amount,6.5, $Reservation)";
    
    if(mysqli_query($conn, $sql2)) {
    //    echo "New record has been added successfully !";
         $sql3="SELECT * FROM Receipt INNER JOIN Reservation where Receipt.ID=Reservation.ID AND Total_amount=$var_amount ";
        //  $sql6="SELECT * FROM Payment "
         $answer3=$conn->query($sql3);
          if($row2=mysqli_fetch_assoc($answer3)){
            // echo $var_amount;
            // echo $row2['Receipt_id'];
            // echo $row2['State_tax'];
            // echo $row2['ID'];
            // echo $row2['Total_amount'];
            // $from = "deepakkumar@ku.com";
            // $to = "deepakladher@gmail.com";
            // $email_cc = "info@bbminfo.com";
            // $email_bcc = "xyz@yahoo.com";
            // $subject = "Invitation for New YGen SEO Tool";
            // $message = "Dear User, We are very glad to inform and invite you, that BBM's YGen SEO Tool (bbminfo.com) is now ready to launch on 15th August, 2013.";
        
            // /* Header Information */
            // $header = "From: " . strip_tags($from) . "\r\n";
            // // $header .= "Cc: " . strip_tags($email_cc) . "\r\n";
            // // $header .= "Bcc: " . strip_tags($email_bcc) . "\r\n";
            // // $header .= "Reply-To: " . strip_tags($from) . "\r\n";
            // $header .= "MIME-Version: 1.0\r\n";
            // $header .= "Content-Type: text/plain; charset=us-ascii\r\n";
        
            // $flg = mail($to, $subject, $message, $header);
        
            // if($flg == true) {
            //     echo("Your message has been sent.");
            // } else {
            //     echo("Failed to sent.");
            // }
          }


      
    } else {
       echo "Error: " . $sql2 . ":-" . mysqli_error($conn);
    }
 }
}
 //   $var_amount = $answer1 * $answer2;




?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Receipt template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
        
        body
        {   
            background-image: url("https://cdn4.vectorstock.com/i/1000x1000/75/73/pattern-with-hand-drawn-doodle-cars-background-vector-20407573.jpg");
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
  <h3 style="color:black; font-family:sans-serif;">Your Receipt</h3>
  
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
<a href="welcome.php" class="btn btn-primary ml-3">Home</a>
<a href="logout.php" class="btn btn-danger ml-3">Sign Out</a>
    <div class="receipt-box" style="background-color: white;">

        <div class="header">
       
            <center>
                <h1>Confirmation</h1>
            </center>
            <!-- <p>My supercool header</p> -->
        </div>

        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEenFLhhoz-KfFwnbomhaLIDN_BbOPmJpQQg&usqp=CAU"
                                    style="width: 100%; max-width: 300px" />

                            </td>

                            <td>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
  
                            <td>
                            
                            Pickup Location:<?php echo $location ?> Lawrence, Kansas<br />
                            </td>

                            <td>
                                Nemesis Corp<br />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="details">
                <td>Receipt ID number: <?php echo $row2['Receipt_id'] ?></td>
                   
                <td> Email:<?php echo $email ?>  <br> Rental date: <?php echo $date?> at <?php echo $time?> 
                <tr>Payment due date:  <?php echo $newdate?></tr>
            </td>
                
            </tr>
           
            <tr class="heading">
            </tr>

            

            <tr class="heading">
                <td>Vehicle</td>
                <td></td>
            </tr>

         
            <tr class="item">
                <td> <img src="<?php echo $PIC  ?>" style="height:50px; border-radius:40px" > <?php echo $Plate  ?>  <?php echo $model  ?> </td>
                   
                <td></td>
            </tr>
            <tr class="item">
                <td>Sub Total: </td>

                <td>$<?php echo $var_amount ?> </td>
            </tr>
            </tr>
            <tr class="item">
                <td>State tax</td>

                <td>$<?php echo $row2['State_tax']/100*$var_amount ?></td>
            </tr>
            <tr class="item">
                <td>Total</td>

                <td>$<?php echo $row2['State_tax']/100*$var_amount+$var_amount ?></td>
            </tr>
           
        </table>
    </div>
    <?php
    mysqli_close($conn);
}
    ?>
</body>

</html>

<style>
    .receipt-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid rgb(1, 1, 1);
        /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.15); */
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .receipt-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .receipt-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .receipt-box table tr td:nth-child(2) {
        text-align: right;
    }

    .receipt-box table tr.top table td {
        padding-bottom: 20px;
    }

    .receipt-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .receipt-box table tr.information table td {
        padding-bottom: 40px;
    }

    .receipt-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .receipt-box table tr.details td {
        padding-bottom: 20px;
    }

    .receipt-box table tr.item td {
        border-bottom: 1px solid #eee;
    }

    .receipt-box table tr.item.last td {
        border-bottom: none;
    }

    .receipt-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .receipt-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .receipt-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    * RTL * .receipt-box.rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .receipt-box.rtl table {
        text-align: right;
    }

    .receipt-box.rtl table tr td:nth-child(2) {
        text-align: left;
    }
</style>
