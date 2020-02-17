<?php
$base = PROOT . "public/login/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $this->siteTitle() ?></title>
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

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?= $base ?>js/modal_process.js"></script>

</head>

<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?= $base ?>images/bg-01.jpg');">
        <?= $this->content('body');?>
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

    
    
</body>

</html>