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

    <!-- Bootstrap CSS -->



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
      <div class="profile">
        <?php while($fetch=mysqli_fetch_object($result)){ ?>
        <img src="user_profile/<?php echo $fetch->p_image;?>" alt="<?php echo $fetch->p_image;?>">
        <?php } ?>
      </div>
      <div class="name">
        <?php  if (isset($_SESSION['NAME'])) { ?>
          <em><strong><?php echo $_SESSION['NAME']; ?></em></strong>
          <?php } ?>
      </div>
    </div>
    <nav class="main-menu">
                <ul>
                    <li>
                        <a href="http://justinfarrow.com">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                Dashboard
                            </span>
                        </a>

                    </li>
                    <li class="has-subnav">
                        <a href="#">
                            <i class="fa fa-laptop fa-2x"></i>
                            <span class="nav-text">
                                Stars Components
                            </span>
                        </a>

                    </li>
                    <li class="has-subnav">
                        <a href="#">
                           <i class="fa fa-list fa-2x"></i>
                            <span class="nav-text">
                                Forms
                            </span>
                        </a>

                    </li>
                    <li class="has-subnav">
                        <a href="#">
                           <i class="fa fa-folder-open fa-2x"></i>
                            <span class="nav-text">
                                Pages
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
                       <a href="#">
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
                        </a>
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




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>
