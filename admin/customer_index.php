<?php include("connection3.php");

$query="select p_image from customer where email='".$_SESSION['Email']."'";
$result=mysqli_query($con,$query);

$query1="select * from customer where email='".$_SESSION['Email']."'";
$result1=mysqli_query($con,$query);
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="stylesheet" href="css/card_details.css"> -->

    <link rel="stylesheet" href="css/customer.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/0af9610dbb.js"></script>
    <title>Welcome to Indian Railway Passenger Reservation Enquiry </title>
    <script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
  </head>
  <body >
    <div class="area">
      <div class="heading_top">
        <h1 class="top_text">Welcome To E-Reservation Portal</h1>
      </div>
      <div class="profile">
        <?php while($fetch=mysqli_fetch_object($result)){ ?>
        <img src="user_profile/<?php echo $fetch->p_image;?>" alt="<?php echo $fetch->p_image;?>">
        <?php } ?>
      </div>
      <div class="name">
        <?php  if (isset($_SESSION['NAME'])) { ?>
          <em><?php echo $_SESSION['NAME']; ?></em>
          <?php } ?>
      </div>
    </div>
    <nav class="main-menu">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                Dashboard
                            </span>
                        </a>

                    </li>
                    <li class="has-subnav">
                        <a href="admin_templates/customer_Train_fares.php">
                            <i class="fa fa-laptop fa-2x"></i>
                            <span class="nav-text">
                                Fares Chart
                            </span>
                        </a>

                    </li>
                    <li class="has-subnav">
                        <a href="admin_templates/customer_Time_tables.php">
                           <i class="fa fa-list fa-2x"></i>
                            <span class="nav-text">
                                Time Tables
                            </span>
                        </a>

                    </li>
                    <li class="has-subnav">
                        <a href="admin_templates/book.php">
                           <i class="fa fa-folder-open fa-2x"></i>
                            <span class="nav-text">
                                Booking
                            </span>
                        </a>

                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-bar-chart-o fa-2x"></i>
                            <span class="nav-text">
                                Graphs and Statistics
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-font fa-2x"></i>
                            <span class="nav-text">
                               Quotes
                            </span>
                        </a>
                    </li>
                    <li>
                       <!-- <a href="#">
                           <i class="fa fa-table fa-2x"></i>
                            <span class="nav-text">
                                Tables
                            </span>
                        </a>
                    </li>
                    <li>
                       <a href="#">
                            <i class="fa fa-map-marker fa-2x"></i>
                            <span class="nav-text">
                                Maps
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                           <i class="fa fa-info fa-2x"></i>
                            <span class="nav-text">
                                Documentation
                            </span>
                        </a> -->
                    </li>
                </ul>

                <ul class="logout">
                    <li>
                       <a href="#">
                            <a href="login_do.php?logout=true"><span class="nav-text"><i class="fa fa-power-off fa-2x"></i>Logout</span></a>
                        </a>
                    </li>
                </ul>
            </nav>

<div class="container">
  <marquee class="pull-center" behavior="scroll" direction="left">
    COVID-19 Appropriate behaviour - Wear Mask, Physical Distancing, Maintain Hand Hygiene - Indian Railways
   <a href="javascript:AlertIt();"> <strong>All Passenger to kindly note that on arrival at their destination, the traveling passengers will have to adhere to such health protocols as are prescribed by the destination State/UT.</strong></a>
   <a href="http://contents.irctc.co.in/en/stateWiseAdvisory.html"> <strong> Click Here to see state wise advisory on Arrival(As available)</strong></a>
  </marquee>

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
  </div>
</div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>
