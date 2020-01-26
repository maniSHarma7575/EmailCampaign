<?php
	$base="/EmailCampaign/public/login/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login to your account</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?=$base?>images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$base?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$base?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$base?>fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$base?>vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=$base?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$base?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$base?>vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=$base?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$base?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=$base?>css/main.css">
<!--===============================================================================================-->
<link   rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
crossorigin="anonymous">
</head>
<body>	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?=$base?>images/bg-01.jpg');">
			<div class="wrap-login100 p-l-35 p-r-35 p-t-20 p-b-40">
				
				<form class="login100-form validate-form" method="post" action="">
					<span class="login100-form-title p-b-10">
						Login
					</span>
					
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Useremail is required">
						<span class="label-input100">Email</span>
						<input class="input100 has-error" type="text" name="email" placeholder="Type your email" id="email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100 has-error" type="password" name="password" placeholder="Type your password" id="password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div class="row p-t-8 p-b-31"">
    				<div class="text-left col-sm"  >
						<label for="remember_me" >Remember Me<input type="checkbox" id="remember_me" name="remember_me" value="on"></label>
						
					</div>
					
					<div class="text-right col-sm">
						<a href="#">
							Forgot password?
						</a>
					</div>
					</div>
					
					<?php 
					//echo $this->displayErrors;
					if(!empty($this->displayErrors))
					{
						echo '<div class="alert alert-warning" style="height:45px" role="alert">';
						echo $this->displayErrors;
						echo '</div>';

					} ?>
					
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn ">
								Login
							</button>
						</div>
					</div>

					

				</form>

				<div class="txt1 text-center p-t-20 p-b-20">
						<span>
							Or
						</span>
					</div>

					<div class="text-center">
						  <a class="btn btn-outline-dark" href="<?=PROOT.filter_var($this->authUrl, FILTER_SANITIZE_URL)?>" role="button" style="text-transform:none">
							<img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
							Login with Google
						  </a>
					</div>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?=$base?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=$base?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=$base?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?=$base?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=$base?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=$base?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?=$base?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?=$base?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?=$base?>js/main.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
        crossorigin="anonymous">
</script>
</body>
</html>