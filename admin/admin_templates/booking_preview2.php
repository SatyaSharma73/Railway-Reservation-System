<?php
include("../connection3.php");


    if(isset($_POST['submit']))
    {

        $query="insert into customer_booking set name='".$_POST['name']."',email='".$_POST['email']."',phone='".$_POST['phone']."',adhaar='".$_POST['adhaar']."',adults='".$_POST['adults']."',children='".$_POST['children']."',arrival='".$_POST['arrival']."',Berth_preference='".$_POST['Berth_preference']."',train_no='".$_REQUEST['no']."',type='".$_POST['type']."'";
        mysqli_query($con,$query);
        header("location:rules.php");
      }

$query="select * from customer_booking";
$result=mysqli_query($con,$query);
$fetch=mysqli_fetch_object($result);

$query1="select * from train";
$result1=mysqli_query($con,$query1);
$fetch1=mysqli_fetch_object($result1);
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/booking_pre.css">
    <script src="https://use.fontawesome.com/0af9610dbb.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Welcome to Indian Railway Passenger Reservation Enquiry</title>
  </head>

  <body>

<div class="main">
    <form action="" method="post">
      <div class="elem-group">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} value="<?php echo $_SESSION['NAME']; ?>"required>
      </div>
      <div class="elem-group">
        <label for="email">Your E-mail</label>
        <input type="email" id="email" name="email" placeholder="john.doe@email.com" value="<?php echo $_SESSION['Email']; ?>" required>
      </div>
      <div class="elem-group">
        <label for="phone">Your Phone</label>
        <input type="tel" id="phone" name="phone" placeholder="+91 xxxxxxxxxx" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
      </div>
      <div class="elem-group">
        <label for="name">Adhaar No.</label>
        <input type="text" id="name" name="adhaar"  required>
      </div>
      <hr>
      <div class="elem-group inlined">
        <label for="adult">Adults</label>
        <input type="number" id="person" name="adults" placeholder="2" min="1" required>
      </div>
      <div class="elem-group inlined">
        <label for="child">Children</label>
        <input type="number" id="person" name="children" placeholder="2" min="0" required>
      </div>
      <div class="elem-group inlined">
        <label for="checkin-date">Arrival Date</label>
        <input type="date" id="checkin-date" name="arrival" required>
      </div>

      <div class="elem-group">

        <select id="room-selection" name="Berth_preference" required>
            <option >Select Berth Preference</option>
            <option value="Lower">Lower</option>
            <option value="Middle">Middle</option>
            <option value="Upper">Upper</option>
        </select>
      </div>
      <div class="elem-group">

        <select id="room-selection" name="type" required>
            <option >Select Fares</option>
            <option value="<?php echo $fetch1->two_A;?>"><?php echo $fetch1->two_A;?> (2A)</option>
            <option value="<?php echo $fetch1->three_A;?>"><?php echo $fetch1->three_A;?> (3A)</option>
            <option value="<?php echo $fetch1->sleeper;?>"><?php echo $fetch1->sleeper;?> (Sl)</option>
        </select>
      </div>
      <hr>

      <input type="submit" name="submit" value="Submit" class="button" >





    </form>




</div>






    <script src="../css/js/booking_pre.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
