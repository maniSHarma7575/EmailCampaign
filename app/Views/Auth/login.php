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
			<input class="input100 has-error" type="email" name="email" placeholder="Type your email" id="email">
			<span class="focus-input100" data-symbol="&#xf206;"></span>
		</div>

		<div class="wrap-input100 validate-input" data-validate="Password is required">
			<span class="label-input100">Password</span>
			<input class="input100 has-error" type="password" name="password" placeholder="Type your password" id="password">
			<span class="focus-input100" data-symbol="&#xf190;"></span>
		</div>
		<div class="row p-t-20 p-b-20"">
    		<div class=" text-left col">
			<label for="remember_me">Remember Me</label><input type="checkbox" id="remember_me" name="remember_me" value="on">
		</div>
		<div class="text-right col">
			<a data-toggle="modal" data-target="#exampleModalCenter">
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
		----or----
	</span>
</div>


<div class="text-center">
	<a class="btn btn-outline-dark" href="<?= filter_var($this->authUrl, FILTER_SANITIZE_URL) ?>" role="button" style="text-transform:none">
		<img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
		Login with Google
	</a>
</div>
</div>

<div class="modal fade " id="exampleModalCenter" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

			<div class="modal-body">

				<div class="panel panel-default">
					<div class="panel-body">
						<div class="text-center">
							<h3><i class="text-left fa fa-lock fa-2x"></i></h3>
							<span style="display: block; font-family: Poppins-Bold; font-size: 27px; color: blue; line-height: 1.2; text-align: center;" p-b-10">
								Forgot Password?
							</span>
							<p>You can reset your password here.</p>
							<div class="panel-body">

								<form class="login100-form validate-form">
									<fieldset>
										<div class="input-group p-b-10">
										<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
      
										<input id="emailm" name="emailm" placeholder="Email Address" class="form-control" type="email"required="">
										</div>

										<div class="form-group">
											<button class="btn btn-primary btn-block" id="sub">Reset Password</button>
										</div>
									</fieldset>
								</form>

							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

			</div>
		</div>
	</div>
</div>




<?php $this->end(); ?>