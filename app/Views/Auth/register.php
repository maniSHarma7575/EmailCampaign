<?php $this->setSiteTitle('Register'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<div class="wrap-login100 p-l-35 p-r-35 p-t-20 p-b-40">
    <span class="login100-form-title p-b-30">
        Create your free account today!
    </span>
    <form method="post" action="">
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input class="form-control" id='email' name='email' placeholder="email" type="email" value="<?= $this->post['email'] ?>" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input class="form-control" id='name' name='name' placeholder="Username" type="text" value="<?= $this->post['name'] ?>" required>
        </div> <!-- form-group// -->


        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input class="form-control" id='password' name='password' placeholder="password" type="password" value="<?= $this->post['password'] ?>" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input class="form-control" id='confirm' name='confirm' placeholder="Confirm password" type="password" value="<?= $this->post['confirm'] ?>" required>
        </div> <!-- form-group// -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> Create Account </button>
        </div> <!-- form-group// -->

    </form>
    <p class="text-center">Have an account? <a href="<?= PROOT ?>user/login">Log In</a> </p>
    <?php
    //echo $this->displayErrors;
    if (!empty($this->displayErrors)) {
        echo '<div class="alert alert-warning" style="height:45px" role="alert">';
        echo $this->displayErrors;
        echo '</div>';
    } ?>
    <div class="txt1 text-center p-b-10">
        <span>
            Or
        </span>
    </div>

    <div class="text-center">
        <a class="btn btn-outline-dark" href="/users/googleauth" role="button" style="text-transform:none">
            <img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
            SignUp with Google
        </a>
    </div>
</div>
<?php $this->end(); ?>