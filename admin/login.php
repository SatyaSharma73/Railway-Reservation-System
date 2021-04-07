<?php
include("connection2.php");

if (isset($_POST['Submit'])) {

  $file = ""; // intialing file name as a blank
									if(isset($_FILES['file'])) {
										$folder = "user_profile";
										//uploading
										$file_exts = array("jpg", "JPG", "JPEG", "bmp", "jpeg", "gif", "png", "doc", "docx", "pdf");
										$value = explode(".", $_FILES["file"]["name"]);
										$upload_exts = end($value);
										if ((($_FILES["file"]["type"] == "image/gif")
										|| ($_FILES["file"]["type"] == "image/jpeg")
										|| ($_FILES["file"]["type"] == "image/jpg")
										|| ($_FILES["file"]["type"] == "image/JPG")
										|| ($_FILES["file"]["type"] == "image/JPEG")
										|| ($_FILES["file"]["type"] == "image/png")
										|| ($_FILES["file"]["type"] == "image/pjpeg")
										|| ($_FILES["file"]["type"] == "application/msword")
										|| ($_FILES["file"]["type"] == "application/msword")
										|| ($_FILES["file"]["type"] == "application/pdf"))
										&& ($_FILES["file"]["size"] < 2000000000)
										&& in_array($upload_exts, $file_exts))
										{
										if ($_FILES["file"]["error"] > 0)
										{

										}
										else
										{
										// Enter your path to <span id="IL_AD5" class="IL_AD">upload file</span> here
										if (file_exists("$folder/" .
										$_FILES["file"]["name"]))
										{
										echo "<div class='error'>"."(".$_FILES["file"]["name"].")".
										" already exists. "."</div>";
										}
										else
										{
											//randome name
											 $ran = md5(time().rand()) ;
											 $file = $ran.".".$upload_exts;
										move_uploaded_file($_FILES["file"]["tmp_name"],
										"$folder/".$file);
										}
										}
										}
											}


$query="insert into admin set name='".$_POST['name']."',email='".$_POST['email']."',password='".$_POST['password']."' ,p_image='".$file."'";
mysqli_query($con,$query);
header("location:login.php");
}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">



<title>Welcome to Indian Railway Passenger Reservation Enquiry</title>
  </head>
  <body>

  <div class="container" id="container">
  	<div class="form-container sign-up-container">
  		<form method="POST" action="" enctype="multipart/form-data">
  			<h1>Create Account</h1>

  			<span>or use your email for registration</span>
  			<input type="text" name="name" value="" placeholder="Name">
        <input type="email" id="inputEmail" name="email" placeholder="Email" required autofocus>
        <input type="password" id="file" name="password" value=""  placeholder="Password" required autofocus>
        <input type="file" name="file" value="" required="">

        <input type="submit" name="Submit" value="Sign Up" class="butt">


  		</form>
  	</div>
  	<div class="form-container sign-in-container">
      <form method="POST" action="login_do.php" enctype="multipart/form-data">
        <h1>Sign In</h1>

        <span>or use your account</span>

        <input type="email" id="inputEmail" name="email" placeholder="Email" required autofocus>
        <input type="password" id="file" name="password" value=""  placeholder="Password" required autofocus>
        <input type="submit" name="login" value="Sign In" class="butt">

  		</form>
  	</div>
  	<div class="overlay-container">
  		<div class="overlay">
  			<div class="overlay-panel overlay-left">
  				<h1>Welcome Back!</h1>
  				<p>To keep connected with us please login with your personal info</p>
  				<button class="butt2" id="signIn">Sign In</button>
  			</div>
  			<div class="overlay-panel overlay-right">
  				<h1>Hello, Friend!</h1>
  				<p>Enter your personal details and start journey with us</p>
  				<button class="butt2" id="signUp">Sign Up</button>
  			</div>
  		</div>
  	</div>
  </div>

  <footer>
  	<p>
  		Created with <i class="fa fa-heart"></i> by
  		<a  href="#">Satya Sharma</a>
  		- Read how I created this and how you can join the challenge
  		<a  href="#">here</a>.
  	</p>
  </footer>
  <script type="text/javascript">
  const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
container.classList.remove("right-panel-active");
});
  </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
