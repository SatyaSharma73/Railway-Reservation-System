<?php
include("connection2.php");
$query="select * from train";
$result=mysqli_query($con,$query);

$query1="select * from route";
$result1=mysqli_query($con,$query1);

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://use.fontawesome.com/0af9610dbb.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/time_tables.css">
    <link rel="stylesheet" href="../css/navbar.css">

  </head>
  <body>

    <nav id="navigationBar">
      <ul>
        <li>
          <a href="../customer_index.php" class="link">Home</a>
        </li>
        <li>
          <a href="customer_train_fares.php" class="link">Fares</a>
        </li>
        <li>
          <a href="" class="link">Add Station</a>
        </li>
        <li>
          <a href="" class="link">Set Train Timing</a>
        </li>

      </ul>

    </nav>

    <h1 class="heading">Time Charts</h1>
    <br>
    <hr>
    <table>

      <thead>
        <tr>
          <th scope="col">Train Name</th>
          <th scope="col">Train No.</th>
          <th scope="col">Source</th>
          <th scope="col">Destination</th>
          <th scope="col">Arrival</th>
          <th scope="col">Departure</th>
          <th scope="col">Runs On</th>


        </tr>
      </thead>
      <?php while($fetch=mysqli_fetch_object($result)){ ?>
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
              <td><?php echo $fetch->specific_day;  ?></td>


        </tr>

      </tbody>
       <?php } ?>

    </table>
























</body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="css/js/navbar.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
