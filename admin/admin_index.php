<?php
include("connection.php");

$query="select p_image from admin where email='".$_SESSION['Email']."'";
$result=mysqli_query($con,$query);


 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/index.css">
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
            <div id="close-sidebar">


            </div>
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
                <a href="#">
                  <i class="fa fa-shopping-cart"></i>
                  <span>E-commerce</span>
                  <span class="badge badge-pill badge-danger">New</span>
                </a>

              </li>
              <li class="sidebar-dropdown">
                <a href="#">
                  <i class="far fa-gem"></i>
                  <span>Components</span>
                </a>

              </li>
              <li class="sidebar-dropdown">
                <a href="#">
                  <i class="fa fa-chart-line"></i>
                  <span>Charts</span>
                </a>

              </li>
              <li class="sidebar-dropdown">
                <a href="#">
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
                  <span>Documentation</span>
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
      <main class="page-content">
        <div class="container">
          <h2>Indian Railway Reservation E-Portal</h2>
          <hr>
          <div class="row">
            <div class="form-group col-md-12">
              <p>This is a responsive sidebar template with dropdown menu based on bootstrap 4 framework.</p>
              <p> You can find the complete code on <a href="https://github.com/azouaoui-med/pro-sidebar-template" target="_blank">
                  Github</a>, it contains more themes and background image option</p>
            </div>
            <div class="form-group col-md-12">
              <iframe src="https://ghbtns.com/github-btn.html?user=azouaoui-med&repo=pro-sidebar-template&type=star&count=true&size=small" frameborder="0" scrolling="0" width="90px" height="30px"></iframe>
              <iframe src="https://ghbtns.com/github-btn.html?user=azouaoui-med&repo=pro-sidebar-template&type=fork&count=true&size=small" frameborder="0" scrolling="0" width="90px" height="30px"></iframe>
            </div>
            <div class="form-group col-md-12">
              <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">New !</h4>
                <p>New react pro sidebar library is now available on <a href="https://www.npmjs.com/package/react-pro-sidebar" target="_blank">npm</a> <a href="https://github.com/azouaoui-med/react-pro-sidebar" target="_blank">
                    <img alt="GitHub stars" src="https://img.shields.io/github/stars/azouaoui-med/react-pro-sidebar?style=social" />
                  </a></p>
                <a href="https://github.com/azouaoui-med/react-pro-sidebar" target="_blank" class="btn btn-sm btn-primary mr-2">
                  Github</a>
                <a href="https://azouaoui-med.github.io/react-pro-sidebar" target="_blank" class="btn btn-sm btn-success">
                  Demo</a>

              </div>

            </div>
          </div>
          <h5>More templates</h5>
          <hr>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="card rounded-0 p-0 shadow-sm">
                <img src="https://user-images.githubusercontent.com/25878302/58369568-a49b2480-7efc-11e9-9ca9-2be44afacda1.png" class="card-img-top rounded-0" alt="Angular pro sidebar">
                <div class="card-body text-center">
                  <h6 class="card-title">Angular Pro Sidebar</h6>
                  <a href="https://github.com/azouaoui-med/angular-pro-sidebar" target="_blank" class="btn btn-primary btn-sm">Github</a>
                  <a href="https://azouaoui-med.github.io/angular-pro-sidebar/demo/" target="_blank" class="btn btn-success btn-sm">Demo</a>
                  <hr>
                  <a href="https://github.com/azouaoui-med/react-pro-sidebar" target="_blank">
                    <img alt="GitHub stars" src="https://img.shields.io/github/stars/azouaoui-med/angular-pro-sidebar?style=social" />
                  </a>
                  <a href="https://github.com/azouaoui-med/react-pro-sidebar" target="_blank">
                    <img alt="GitHub stars" src="https://img.shields.io/github/forks/azouaoui-med/angular-pro-sidebar?style=social" />
                  </a>

                </div>

              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="card rounded-0 p-0 shadow-sm">
                <img src="https://user-images.githubusercontent.com/25878302/58369258-33f20900-7ef8-11e9-8ff3-b277cb7ed7b4.PNG" class="card-img-top rounded-0" alt="Angular pro sidebar">
                <div class="card-body text-center">
                  <h6 class="card-title">Angular Dashboard</h6>
                  <a href="https://github.com/azouaoui-med/lightning-admin-angular" target="_blank" class="btn btn-primary btn-sm">Github</a>
                  <a href="https://azouaoui-med.github.io/lightning-admin-angular/demo/" target="_blank" class="btn btn-success btn-sm">Demo</a>
                  <hr>
                  <a href="https://github.com/azouaoui-med/react-pro-sidebar" target="_blank">
                    <img alt="GitHub stars" src="https://img.shields.io/github/stars/azouaoui-med/lightning-admin-angular?style=social" />
                  </a>
                  <a href="https://github.com/azouaoui-med/react-pro-sidebar" target="_blank">
                    <img alt="GitHub stars" src="https://img.shields.io/github/forks/azouaoui-med/lightning-admin-angular?style=social" />
                  </a>
                </div>
              </div>
            </div>
          </div>
          <hr>

          <footer class="text-center">
            <div class="mb-2">
              <small>
                © 2021 made By
                  Satya Sharma | Sayan Garai | Sayan Ghosal

              </small>
            </div>

            <div>
              <a href="https://github.com/azouaoui-med" target="_blank">
                <img alt="GitHub followers" src="https://img.shields.io/github/followers/azouaoui-med?label=github&style=social" />
              </a>
              <a href="https://twitter.com/azouaoui_med" target="_blank">
                <img alt="Twitter Follow" src="https://img.shields.io/twitter/follow/azouaoui_med?label=twitter&style=social" />
              </a>
            </div>
          </footer>

        </div>

      </main>
      <!-- page-content" -->
    </div>
    <!-- page-wrapper -->






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
