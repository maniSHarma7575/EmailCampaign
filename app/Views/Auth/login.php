<?php $this->setSiteTitle('Login'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<div class="wrap-login100 p-l-35 p-r-35 p-t-20 p-b-40">

	<form class="login100-form validate-form" method="post" action="">
		<span class="login100-form-title p-b-10">
			Login
		</span>

		<div class="wrap-input100 validate-input m-b-23" data-validate="Useremail is required">
			<span class="label-input100">Email</span>
			<input class="input100 has-error" type="text" name="email" placeholder="Type your email" id="email">
			<span class="focus-input100" data-symbol="&#xf206;"></span>
		</div>

		<div class="wrap-input100 validate-input" data-validate="Password is required">
			<span class="label-input100">Password</span>
			<input class="input100 has-error" type="password" name="password" placeholder="Type your password" id="password">
			<span class="focus-input100" data-symbol="&#xf190;"></span>
		</div>
		<div class="row p-t-20 p-b-20"">
    		<div class=" text-left col-sm">
				<label for="remember_me">Remember Me<input type="checkbox" id="remember_me" name="remember_me" value="on"></label>
			</div>
			<div class="text-right col-sm">
			<a href="#">
							Forgot password?
						</a>
			</div>
		</div>


		<?php
		//echo $this->displayErrors;
		if (!empty($this->displayErrors)) {
			echo '<div class="alert alert-danger" style="height:45px" role="alert">';
			echo $this->displayErrors;
			echo '</div>';
		} ?>


		<div class="form-group text-center">
			<button type="submit" class="btn btn-primary btn-block"> Login </button>
		</div> <!-- form-group// -->



</form>

<div class="txt1 text-center p-t-10 p-b-20">
	<span>
		Or
	</span>
</div>


<div class="text-center">
	<a class="btn btn-outline-dark" href="<?= filter_var($this->authUrl, FILTER_SANITIZE_URL) ?>" role="button" style="text-transform:none">
		<img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
		Login with Google
	</a>
</div>
</div>
<?php $this->end(); ?>