<?php
include("connection2.php");

if (isset($_POST['Submit'])) {

  $file = ""; // intialing file name as a blank
									if(isset($_FILES['file'])) {
										$folder = "user_image";
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

  $query="insert into user_data set Name='".$_POST['name']."',Address='".$_POST['address']."',Email='".$_POST['email']."',Number='".$_POST['alternate_no']."',Age='".$_POST['age']."',Gender='".$_POST['sex']."' ,p_image='".$file."'";
  mysqli_query($con,$query);
  header("location:../admin_index.php");
}

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/edit.css">
    <script src="https://use.fontawesome.com/0af9610dbb.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Welcome to Indian Railway Passenger Reservation Enquiry</title>
  </head>

  <body>

    <form method="POST" enctype="multipart/form-data" class="form">
  	  <h2>User Profile</h2>
  	  <div class="form-group">
  		  <label for="email">Full Name:</label>
  		  <div class="relative">
          <input type="text" id="name" name="name" pattern="[a-zA-Z\s]+" class="form-control"  placeholder="Eg. John" title="Username should only contain letters. e.g. Piyush Gupta" required="" autofocus="">
          <!-- value="<?php echo $fetch->Name;?>" -->
          <!-- <input       autocomplete="" placeholder="Type your name here..."> -->

  			  <i class="fa fa-user"></i>
  		  </div>
  	  </div>
  	  <div class="form-group">
  	  	<label for="email">Alternate Email:</label>
  	  	<div class="relative">
  		  	<!-- <input class="form-control" type="email" required=""  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"> -->
          <input type="email" name="email" class="form-control" placeholder="Eg. Email@email.com" required=""  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
  		  	<i class="fa fa-envelope"></i>
  	  	</div>
  	  </div>
  	  <div class="form-group">
  	  	<label for="email">Alternate Contact Number:</label>
  	  	<div class="relative">
  	  		<input class="form-control" name="alternate_no" type="text" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required="" ">
  	  		<i class="fa fa-phone"></i>
  	  	</div>
  	  </div>
  	  <div class="form-group">
  	  	<label for="email">Permanent Address</label>
  	  	<div class="relative">
          <input type="text" name="address" class="form-control"  placeholder="Eg. Cal Tech" required="">
  	  		<i class="fa fa-building"></i>
  	  	</div>
  	  </div>
  	  <div class="form-group">
  	  	<label for="email">Age:</label>
  	  	<div class="relative">
  	  	<input class="form-control" name="age" type="text" required="" ">
  	  	<i class="fa fa-suitcase"></i>
  	  </div>
  	  </div>
  		<div class="form-group">
  			<label for="email">Gender:</label>
  	  	<div class="relative">
  	  		<input class="form-control" type="text" name="sex" required="" ">
  	  		<i class="fa fa-css3"></i>
  	  	</div>
  	  </div>
  		<div class="form-group">
  			<label for="email">Image:</label>
  	  	<div class="relative">
  	  		<div class="input-group">
            <label class="input-group-btn">
              <!-- <span class="btn btn-default"> -->
                  <!-- Browse&hellip; -->
                   <input type="file" id="file" name="file" class="form-control" required="" style="display: visible;" multiple>

              <!-- </span> -->
            </label>
            <!-- <input type="text" class="form-control" required="" placeholder="Click On Browse..."  readonly> -->
            <i class="fa fa-link"></i>
        	</div>
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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
