<?php
$con=mysqli_connect("localhost","root","","railwayreservation");

if (isset($_REQUEST['login'])) {
  $query="select * from admin where email='".$_REQUEST['email']."' and password='".$_REQUEST['password']."' ";
  $result=mysqli_query($con,$query);
  $count=mysqli_num_rows($result);
  $fetch=mysqli_fetch_object($result);
  if($count>0){
    @session_start();
    $_SESSION['NAME']=$fetch->name;
    $_SESSION['Email']=$fetch->email;
    $_SESSION['AID']=$fetch->id;
    header("location:admin_index.php");
  }
}
if (isset($_REQUEST['logout'])){
  @session_start();
    @session_destroy();

header("location:../index.php");
}
 ?>
