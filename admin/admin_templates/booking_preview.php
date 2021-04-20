<?php

include("connection2.php");
$query="select * from train";
$result=mysqli_query($con,$query);

$query1="select * from route";
$result1=mysqli_query($con,$query1);

$query="select * from train where train_no='".$_REQUEST['no']."'";
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
body{
  text-align: center;
  padding: 10%;
}
  .main{
    text-align: center;
    padding-bottom: 100px;
  }
button{
  margin-top: 50px;
  margin-bottom: 50px;
}
</style>

  <body>

<div class="main">

<h1 class="Confirmation">Confirm the Train you want to Book</h1>
<a href="booking_preview2.php?no=<?php echo $fetch->train_no;?>"><button type="button" class="btn btn-success">Confirm</button></a>

<table>

  <thead>
    <tr>
      <th scope="col">Train Name</th>
      <th scope="col">Train No.</th>
      <th scope="col">Source</th>
      <th scope="col">Destination</th>
      <th scope="col">Arrival</th>
      <th scope="col">Departure</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td><?php echo $fetch->train_name;  ?></td>
      <td><?php echo $fetch->train_no;  ?></td>
      <td><?php echo $fetch->source;  ?></td>
      <td><?php echo $fetch->destination;  ?></td>

      <td><?php
           $query1="select arrival from route where train_id ='".$fetch->id."'";
           $result1=mysqli_query($con,$query1);
           $fetch1=mysqli_fetch_object($result1);
           echo $fetch1->arrival;
        ?></td>
      <td><?php
                $query1="select departure from route where train_id ='".$fetch->id."'";
                $result1=mysqli_query($con,$query1);
                $fetch1=mysqli_fetch_object($result1);
                echo $fetch1->departure;
         ?></td>



    </tr>

  </tbody>

</table>
</div>
























    <script src="../css/js/booking_pre.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
