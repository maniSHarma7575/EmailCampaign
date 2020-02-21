<?php $this->setSiteTitle('Login'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<main id="main">
	<div class="hero-section">
		<div class="container-fluid my-0 py-5 min-vh-100">
			<div class="container-fluid px-md-5 mt-3 mb-3">
				<div class="row mx-lg-4  mx-auto px-auto">
					<div class="col-6 mt-5 " style="margin-right:100px">
						<h2 class="display-4 font-weight-bold text-white " data-aos="fade-right" style="font-family: 'Open Sans', sans-serif;">Welcome to Pigeon</h2>
						<i>
							<h6 class="mt-4" data-aos="fade-right" data-aos-delay="200" style="color:#fff;font-weight:bolder;font-size:1.8em;font-family:Times New Roman;">&ldquo;Pigeon makes it easy to send campaigns to the right people at the right time—and most importantly, to motivate customers to come back into our app.&rdquo;</h6>
							<p class="mt-4 text-right" data-aos="fade-right" data-aos-delay="200" style="color:black">~Manish Sharma</p>
						</i>
					</div>
					<div class="col-4">
						<div id="first">
							<div class="myform form mt-4" style="background-color: rgb(255,255,255);border-radius:25px;">

								<form action="" method="post" style="padding: 20px">
									<div class="form-group mt-3">

										<label for="exampleInputEmail1" style="color: black; font-weight:bold;">Email address</label>
										<span style="color:red">*</span></label>

										<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="" required="">

									</div>
									<div class="form-group">
										<label for="password" style="color: black; font-weight:bold;">Password</label>
										<span style="color:red">*</span></label>
										<input type="password" name="password" id="password" class="form-control" aria-describedby="emailHelp" placeholder="" required="">
									</div>


									<div class="form-group ">
										<div class="row">
											<div class="col-6"><label for="remember_me" style="color: black; font-weight:bold;font-size:medium;" class="text-left mt-1">Remember Me</label><input class="text-left mt-1" type="checkbox" id="remember_me" name="remember_me" value="on"></div>
											<div class="col-6">
												<p class="text-right mt-1" style="color: rgb(104,104,104);"><a href="#" data-toggle="modal" data-target="#forgetmodal" style="color: rgb(24,24,24);font-size:medium;">Forgot password ?</a></p>
											</div>
										</div>
									</div>
									<?php
									if (!empty($this->displayErrors)) {
										echo '<p id="errorval" style="color:red; font-weight:bold; font-size:medium;" class="form-group">';
										echo $this->displayErrors;
										echo '</p>';
									}
									?>
									<div class="col-md-14 form-group text-center ">
										<button type="submit" class=" btn btn-block mybtn btn-primary ">Login</button>
									</div>

									<div class="row mx-1 my-3">
										<hr class="d-inline col" style="border-top: 1px solid black;">
										<span class='col-2 text-center' style="color: black; font-weight:bold;">or</span>
										<hr class="d-inline col" style="border-top: 1px solid black;">
									</div>
									<div class="col-md-12 mb-1 ">

										<div class="col-md-14 text-center">

											<a class="form-group btn btn-outline-dark" style="color: black;" href="<?= filter_var($this->authUrl, FILTER_SANITIZE_URL) ?>" role="button" style="text-transform:none">
												<img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
												Login with Google
											</a>

										</div>

									</div>
									<div class="form-group">
										<div class="row">
											<p class="col-1"></p>
											<span class='col-10 text-center' style="color: black; font-weight:bold;">Don't have account? <a href="<?= PROOT ?>user/register" style="font-size:small; color: rgb(72,72,72);padding-top:10px;">Sign up here</a></span>
											<p class="col-1"></p>
										</div>
									</div>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

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

											<input id="emailm" name="emailm" placeholder="Email Address" class="form-control" type="email" required="">
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