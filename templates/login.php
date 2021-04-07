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
  		<form action="#">
  			<h1>Create Account</h1>

  			<span>or use your email for registration</span>
  			<input type="text" placeholder="Name" />
  			<input type="email" placeholder="Email" />
  			<input type="password" placeholder="Password" />
  			<button>Sign Up</button>
  		</form>
  	</div>
  	<div class="form-container sign-in-container">
  		<form action="#">
  			<h1>Sign in</h1>

  			<span>or use your account</span>
  			<input type="email" placeholder="Email" />
  			<input type="password" placeholder="Password" />
  			<a href="#">Forgot your password?</a>
  			<button>Sign In</button>
  		</form>
  	</div>
  	<div class="overlay-container">
  		<div class="overlay">
  			<div class="overlay-panel overlay-left">
  				<h1>Welcome Back!</h1>
  				<p>To keep connected with us please login with your personal info</p>
  				<button class="ghost" id="signIn">Sign In</button>
  			</div>
  			<div class="overlay-panel overlay-right">
  				<h1>Hello, Friend!</h1>
  				<p>Enter your personal details and start journey with us</p>
  				<button class="ghost" id="signUp">Sign Up</button>
  			</div>
  		</div>
  	</div>
  </div>

  <footer>
  	<p>
  		Created with <i class="fa fa-heart"></i> by
  		<a target="_blank" href="https://florin-pop.com"></a>
  		- Read how I created this and how you can join the challenge
  		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
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
