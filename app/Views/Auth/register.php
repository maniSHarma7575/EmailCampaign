<?php
$base = "/PHPLearning/public/Login/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= $base ?>images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= $base ?>vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= $base ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= $base ?>fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= $base ?>vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= $base ?>vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= $base ?>vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= $base ?>vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= $base ?>vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= $base ?>css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= $base ?>css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?= $base ?>images/bg-01.jpg');">
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
                <p class="text-center">Have an account? <a href="<?=PROOT?>register/login">Log In</a> </p>
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
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="<?= $base ?>vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= $base ?>vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= $base ?>vendor/bootstrap/js/popper.js"></script>
    <script src="<?= $base ?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= $base ?>vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= $base ?>vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= $base ?>vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= $base ?>vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?= $base ?>js/main.js"></script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>