<?php
include("connection.php");

$query="select p_image from admin where email='".$_SESSION['Email']."'";
$result=mysqli_query($con,$query);

$query1="select * from admin where email='".$_SESSION['Email']."'";
$result1=mysqli_query($con,$query);

$query2="select * from station";
$result2=mysqli_query($con,$query2);

if (isset($_REQUEST['search'])) {
  $query3="Select * from train where train_name='".$_REQUEST['search']."'";
  mysqli_query($con,$query3);
  header("location:Time_tables.php");
}






 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/dashboard_tables.css">
    <link rel="stylesheet" href="css/search.css">
    <!-- <link rel="stylesheet" href="css/card_details.css"> -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/0af9610dbb.js"></script>
    <title>Welcome to Indian Railway Passenger Reservation Enquiry </title>
  </head>
  <body>

    <div class="page-wrapper chiller-theme toggled">
      <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
      </a>
      <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
          <div class="sidebar-brand">
            <a href="login_do.php?logout=true"><i class="fa fa-sign-out" aria-hidden="true">Logout</i></a>

          </div>
          <div class="sidebar-header">
            <div class="user-pic">
              <?php while($fetch=mysqli_fetch_object($result)){ ?>
              <img src="user_profile/<?php echo $fetch->p_image;?>" alt="<?php echo $fetch->p_image;?>">
              <?php } ?>
              <!-- <img src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt=""> -->
            </div>
            <div class="user-info">
              <span class="user-name">
                <?php  if (isset($_SESSION['NAME'])) { ?>
                  <em><strong><?php echo $_SESSION['NAME']; ?></em></strong>
                  <?php } ?>
              </span>

              <span class="user-role">Administrator</span>
              <span class="user-status">
                <span>Online</span>
                </span>
              <span class="user-status">
                  <span><a href="admin_templates\edit.php" class="user-status"> Edit profile</span>
              </span>
            </div>

          </div>
          <div class="sidebar-menu">
            <ul>
              <li class="header-menu">
                <span>General</span>
              </li>
              <li class="sidebar-dropdown">
                <a href="#">
                  <i class="fa fa-tachometer" aria-hidden="true"></i>

                <span>Dashboard</span>
                  <span class="badge 'badge-pill' ">New</span>
                </a>

              </li>
              <li class="sidebar-dropdown">
                <a href="admin_templates/add_trains.php">

                  <i class="fa fa-plus" aria-hidden="true"></i>
                  <span>Add Trains No.</span>

                </a>
                </li>
                <li class="sidebar-dropdown">
                  <a href="admin_templates/add_station.php">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <span>Add Station</span>

                  </a>
                </li>
              <li class="sidebar-dropdown">
                <a href="admin_templates/set_time.php">
                  <i class="fa fa-clock-o" aria-hidden="true"></i>
                  <span>Set Trains Time</span>

                </a>
              </li>
              <li class="sidebar-dropdown">
                <a href="admin_templates/Time_tables.php">
                  <i class="fa fa-table" aria-hidden="true"></i>
                  <span>Time Tables</span>
                </a>


              </li>
              <li class="sidebar-dropdown">
                <a href="https://www.google.com/maps/@22.3867122,78.420565,5z">
                  <i class="fa fa-globe"></i>
                  <span>Maps</span>
                </a>

              </li>
              <li class="header-menu">
                <span>Extra</span>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-book"></i>
                  <span>Transaction</span>
                  <span class="badge badge-pill badge-primary">Beta</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-calendar"></i>
                  <span>Calendar</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-folder"></i>
                  <span>Examples</span>
                </a>
              </li>
            </ul>
          </div>
          <!-- sidebar-menu  -->
        </div>

      </nav>
      <!-- sidebar-wrapper  -->


<div class="container">
  <h2 class="dash_heading">Indian Railway Reservation E-Portal</h2>
  <hr>

    <div class="table1">
      <h1 class="heading">Station Masters</h1>
      <br>
      <hr>
      <table border="5px">

        <thead>
          <tr>
            <th scope="col">Station Name</th>
            <th scope="col">Station Master</th>
            <th scope="col">Station Code</th>

          </tr>
        </thead>
        <?php while($fetch=mysqli_fetch_object($result2)){ ?>
        <tbody>
          <tr>
            <td><?php echo $fetch->station_name;  ?></td>
            <td><?php echo $fetch->station_master;  ?></td>
            <td><?php echo $fetch->station_code;  ?></td>
          </tr>

        </tbody>
         <?php } ?>

      </table>
    </div>

    <div class="table2">
      <div class="wrap">
        <h1 class="search_pnr">Search PNR</h1>

     <form  action="" method="post">
       <div class="search">
          <input type="text"  name="search" class="searchTerm" placeholder="What are you looking for?">
          <button type="submit" name="search" class="searchButton">
            <i class="fa fa-search"></i>
         </button>
       </div>
     </form>

</div>

    </div>

        </div>

      </main>
      <!-- page-content" -->
      </div>


    <!-- Optional JavaScript; choose one of the two! -->
<script src="css/js/index.js" charset="utf-8"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
