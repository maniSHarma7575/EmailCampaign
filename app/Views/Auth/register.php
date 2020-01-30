<?php $this->setSiteTitle('Register'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<div class="wrap-login100 p-l-35 p-r-35 p-t-20 p-b-40">
    <span class="login100-form-title p-b-20">
        Register
    </span>
    <form method="post" action="">
        <div class="wrap-input100 validate-input mb-2" data-validate="Useremail is required">
			<span class="label-input100">Email</span>
			<input class="input100 has-error" type="text" name="email" placeholder="Enter your email" id="email">
			<span class="focus-input100" data-symbol="&#xf206;"></span>
        </div>
        <div class="wrap-input100 validate-input mb-2" data-validate="Username is required">
			<span class="label-input100">Username</span>
			<input class="input100 has-error" type="text" name="name" placeholder="Enter your name" id="name">
			<span class="focus-input100" data-symbol="&#xf206;"></span>
        </div>
        <div class="wrap-input100 validate-input mb-2" data-validate="Password is required">
			<span class="label-input100">Password</span>
			<input class="input100 has-error" type="password" name="password" placeholder="Enter your password" id="password">
			<span class="focus-input100" data-symbol="&#xf190;"></span>
        </div>
        <div class="wrap-input100 validate-input mb-2" data-validate="Confirm Password is required">
			<span class="label-input100">Confirm Password</span>
			<input class="input100 has-error" type="password" name="confirm" placeholder="Confirm your password" id="confirmpassword">
			<span class="focus-input100" data-symbol="&#xf190;"></span>
		</div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary btn-block"> Create Account </button>
        </div> <!-- form-group// -->

    </form>
    <div class="txt1 text-center p-b-7">
        <span>
            Or
        </span>
    </div>
    <p class="text-center">Have an account? <a href="<?= PROOT ?>user/login">Log In</a> </p>
    <?php
    //echo $this->displayErrors;
    if (!empty($this->displayErrors)) {
        echo '<div class="alert alert-danger" style="height:45px" role="alert">';
        echo $this->displayErrors;
        echo '</div>';
    } ?>
    

</div>
<?php $this->end(); ?>

