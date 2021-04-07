<?php
include("header.php");
$con=mysqli_connect("localhost","root","","railwayreservation");

@session_start();
if($_SESSION['NAME']=='')
{
  header("location:login.php");
}
?>
