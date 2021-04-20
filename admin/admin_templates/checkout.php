<?php

include("../connection3.php");

$query="select * from customer_booking where id='".$_REQUEST['id']."'";
$result=mysqli_query($con,$query);
$fetch=mysqli_fetch_object($result);


 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/booking_pre.css">
    <script src="https://use.fontawesome.com/0af9610dbb.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/time_tables.css">
    <title>Welcome to Indian Railway Passenger Reservation Enquiry</title>
  </head>

<style media="screen">

@import url('https://fonts.googleapis.com/css2?family=Playfair+Display+SC&display=swap');

body{
  padding: 1%;
}

h1{
  font-family: 'Playfair Display SC', serif;
}
button{
  margin-top: 50px;
  margin-bottom: 50px;
}
</style>

  <body>



<h1 class="Confirmation">Confirm Your Details</h1>
<hr>

<form class="" action="../payumoney/payment.php" method="post">
      <div class="elem-group">
      <label for="firstname">Your Name</label>
      <input type="text" id="name" name="firstname" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} value="<?php echo $_SESSION['NAME']; ?>"required>
    </div>
    <div class="elem-group">
      <label for="email">Your E-mail</label>
      <input type="email" id="email" name="email" placeholder="john.doe@email.com" value="<?php echo $_SESSION['Email']; ?>" required>
    </div>
    <div class="elem-group">
      <label for="phone">Your Phone</label>
      <input type="tel" id="phone" name="phone" value="<?php echo $fetch->phone;?>" required>
    </div>
    <div class="elem-group">
      <label for="name">Adhaar No.</label>
      <input type="text" id="name" name="adhaar" value="<?php echo $fetch->adhaar;?>" required>
    </div>
    <hr>
    <div class="elem-group inlined">
      <label for="adult">Total No. of Person</label>
      <input type="text" id="person" name="person" value="<?php
      $adult=$fetch->adults;
      $child=$fetch->children;
      $total=$adult+$child;
      echo $total;  ?>" required>
    </div>
    <div class="elem-group inlined">
      <label for="child">Total Fare</label>
      <input type="text" id="person" name="amount" value="<?php
      $fare=$fetch->type;
      $adult=$fetch->adults;
      $child=$fetch->children;
      $total=$fare*($adult+$child);
      echo $total;  ?>" required>
    </div>
    <div class="elem-group inlined">
      <label for="checkin-date">Arrival Date</label>
      <input type="date" id="checkin-date" name="arrival" value="<?php echo $fetch->arrival;?>" required>
    </div>


<input type="submit" name="submit" value="Submit" class="button" ></a>


<input type="hidden" name="productinfo" value="test">
<input type="hidden" name="amount" value="<?php echo $total; ?>">
<input type="hidden" name="surl" value="http://localhost/RAILWAY_BOOKING/admin/payumoney/success.php">
<input type="hidden" name="furl" value="http://localhost/RAILWAY_BOOKING/admin/payumoney/failure.php">


</form>

  <!-- <a href="../payumoney/payment.php?adhaar=<?php echo $fetch->adhaar;?> "> -->
























    <script src="../css/js/booking_pre.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+ph41jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
