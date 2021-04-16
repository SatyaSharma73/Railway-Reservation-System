<?php
include("../connection3.php");

if (isset($_POST['Submit'])) {


}

    if(isset($_POST['submit']))
    {
        $number1 = $_POST['total_adults'];
        $number2 = $_POST['total_children'];
        $sum =  $number1+$number2;
        echo "The sum of $number1 and $number2 is: ".$sum;
        $query="insert into user_data set Name='".$_POST['name']."',Address='".$_POST['address']."',Email='".$_POST['email']."',Number='".$_POST['alternate_no']."',Age='".$_POST['age']."',Gender='".$_POST['sex']."' ,p_image='".$file."'";
        mysqli_query($con,$query);
        header("location:../admin_index.php");
      }

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

    <title>Welcome to Indian Railway Passenger Reservation Enquiry</title>
  </head>

  <body>

<div class="main">
    <form action="reservation.php" method="post">
      <div class="elem-group">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} value="<?php echo $_SESSION['NAME']; ?>"required>
      </div>
      <div class="elem-group">
        <label for="email">Your E-mail</label>
        <input type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" value="<?php echo $_SESSION['Email']; ?>" required>
      </div>
      <div class="elem-group">
        <label for="phone">Your Phone</label>
        <input type="tel" id="phone" name="visitor_phone" placeholder="+91 xxxxxxxxxx" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
      </div>
      <div class="elem-group">
        <label for="name">Adhaar No.</label>
        <input type="text" id="name" name="visitor_name"  required>
      </div>
      <hr>
      <div class="elem-group inlined">
        <label for="adult">Adults</label>
        <input type="number" id="person" name="total_adults" placeholder="2" min="1" required>
      </div>
      <div class="elem-group inlined">
        <label for="child">Children</label>
        <input type="number" id="person" name="total_children" placeholder="2" min="0" required>
      </div>
      <div class="elem-group inlined">
        <label for="checkin-date">Arrival Date</label>
        <input type="date" id="checkin-date" name="checkin" required>
      </div>
      <div class="elem-group inlined">
        <label for="checkout-date">Departure Date</label>
        <input type="date" id="checkout-date" name="checkout" required>
      </div>
      <div class="elem-group">
        <label for="room-selection">Select Berth Preference</label>
        <select id="room-selection" name="room_preference" required>
            <option value="">Choose from the List</option>
            <option value="connecting">Lower</option>
            <option value="adjoining">Middle</option>
            <option value="adjacent">Upper</option>
        </select>
      </div>
      <hr>

      <button type="submit">Book Now</button>
    </form>




</div>






    <script src="../css/js/booking_pre.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
