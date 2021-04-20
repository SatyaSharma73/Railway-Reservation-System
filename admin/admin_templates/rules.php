<?php
include("../connection3.php");

$query="select * from customer_booking WHERE id=(SELECT max(id) FROM customer_booking)";
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/booking_pre.css">
    <script src="https://use.fontawesome.com/0af9610dbb.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Welcome to Indian Railway Passenger Reservation Enquiry</title>
  </head>

  <body>

    <div class="rules">
      <h1 class="heading">Reservation T&C</h1>
      <hr>
      <p>1. All passengers are hereby informed that downloading of Aarogya Setu App on their mobile phone, that they are carrying along, is advisable.</p>
      <p>2. For trains cancelled till 30th June 2020 by Indian Railways, full refund will be provided automatically by IRCTC. Users need not cancel their e-tickets. Full fare will be credited back into users accounts from which payment was made.</p>
      <p>3. Catering Service is not available and catering charges not included in the fare.</p>
      <p>4. No blanket and linen shall be provided in the train.</p>
      <p>5. There are Maximum Waiting List Limits in the PRS booking system for which Waitlisted Tickets can be issued after all confirmed tickets are exhausted. Your ticket booking request may get declined as the Maximum Waiting List Limit may be reached in the booking system by the time payment success response is received from your bank. In such case, your deducted amount will be refunded back, without any deductions, to your bank account in 3-5 working days. Inconvenience caused is regret</p>
      <p>6. All Passenger to kindly note that on arrival at their destination, the traveling passengers will have to adhere to such health protocols as are prescribed by the destination State/UT.</p>
      <p>7.<a href="http://contents.irctc.co.in/en/stateWiseAdvisory.html"> <strong> Click Here to see state wise advisory on Arrival(As available)</strong></a></p>
      <p>8. Get your favourite food at your train seat through e-Catering available at selected stations.</p>


      <a href="checkout.php?id=<?php echo $fetch->id;?>"><input type="submit" name="submit" value="Submit" class="button" ></a>
    </div>















    <script src="../css/js/booking_pre.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
