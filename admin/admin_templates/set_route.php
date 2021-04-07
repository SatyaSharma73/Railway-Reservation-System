<?php
include("connection2.php");

if (isset($_POST['Submit'])) {

  $query="insert into route set train_id='".$_POST['train_id']."',station_id='".$_POST['station_id']."',arrival='".$_POST['arrival']."',departure='".$_POST['departure']."'";
  mysqli_query($con,$query);
  // header("location:login.php");
  }

  $query1="select * from station,train";
  $result1=mysqli_query($con,$query1);

  $query2="select * from station,train";
  $result2=mysqli_query($con,$query2);
   ?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/edit.css">
    <script src="https://use.fontawesome.com/0af9610dbb.js"></script>
    <title>Welcome to Indian Railway Passenger Reservation Enquiry</title>

</head>
<style media="screen">


</style>
<body>


            <form method="POST" enctype="multipart/form-data" class="form">
              <h2>Set Train Route</h2>
              <div class="form-group">
                <label for="email">Select Train No.</label>
                <div class="relative">
                  <select name="train_id" class="form-control" id="stations">
                    <?php while($fetch=mysqli_fetch_object($result1)){   ?>
                      <option value="<?php echo $fetch->id;?>"><?php echo $fetch->train_no;?></option>
                    <?php } ?>
                  </select>
                  <i class="fa fa-user"></i>
                </div>
              </div>

              <div class="form-group">
                <label for="email">Choose Station</label>
                <div class="relative">

                  <select name="station_id" class="form-control" id="stations">
                    <?php while($fetch=mysqli_fetch_object($result2)){   ?>
                      <option value="<?php echo $fetch->id;?>"><?php echo $fetch->station_name;?></option>
                    <?php } ?>
                  </select>

                  <i class="fa fa-phone"></i>
                </div>
              </div>
              <div class="form-group">
                <label for="email">Arrival Time:</label>
                <div class="relative">
                  <input class="form-control" name="arrival" type="text" maxlength="10" required >
                  <i class="fa fa-phone"></i>
                </div>
              </div><div class="form-group">
                <label for="email">Departure Time:</label>
                <div class="relative">
                  <input class="form-control" name="departure" type="text" maxlength="10" required >
                  <i class="fa fa-phone"></i>
                </div>
              </div>

              <div class="tright">
                <a href=""><button class="movebtn movebtnre" type="Reset"><i class="fa fa-fw fa-refresh"></i> Reset </button></a>
                <!-- <a href=""><button class="movebtn movebtnsu" type="Submit">Submit <i class="fa fa-fw fa-paper-plane"></i></button></a> -->
                <input type="submit" name="Submit" value="INSERT" class="movebtn movebtnsu">
                <!-- <input type="submit" name="Update" value="Update" class="movebtn movebtnsu"><input type="hidden" name="id" value="<?php echo $fetch->U_ID;?>"> -->
              </div>
            </form>

            <div class="thanks" style="display: none;">
              <h4>Thank you!</h4>
              <p><small>Your message has been successfully sent.</small></p>
            </div>



















            <script type="text/javascript">

            $('form').submit(function(){
            $('.thanks').show();
            $('.thanks').delay(2000).fadeOut();
            window.setInterval(function() {
              window.location.reload();
              $('form input#name').focus();
            }, 2500);
            event.preventDefault(); // Here triggering stops
            });

            </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
