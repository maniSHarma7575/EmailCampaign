<?php
$basee = PROOT . "public/dashboard/";
$base = PROOT . "public/login/";
?>
<!doctype html>
<html lang="en">

<head>
    <?= $this->content('head'); ?>
    <title><?= $this->siteTitle() ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="<?= $basee ?>vendoor/icofont/icofont.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= $basee ?>css/style.css">
    <link href="<?= $basee ?>vendoor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
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

    <div class="wrapper d-flex align-items-stretch">

        <nav id="sidebar">
            <div class="p-4 pt-5">
                <?php /*   <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(<?=$basee?>images/logoa.jpg);"></a>*/ ?>

                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="<?= PROOT ?>dashboard/">Home</a>
                    </li>
                    <li>
                        <a href='<?= PROOT ?>campaign/'>Previous Campaigns</a>
                    </li>
                    <li>
                        <a href="<?= PROOT ?>subscriber/">Subscribers</a>
                    </li>
                    <li>
                        <a href="<?= PROOT ?>user/logout">Logout</a>
                    </li>

                </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-1 p-md-3">
            <h3 style='text-align:center; font-weight:bold;'>Welcome to Email Campaign</h3>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">

                            <li class="nav-item mr-2">

                                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle btn btn-success" style="background-color: blue"><i class="fa fa-envelope"></i>Launch Campaigns</a>
                                <ul class="collapse list-unstyled" id="pageSubmenu">
                                    <li>
                                        <a href="<?= PROOT ?>campaign/launch?service=smtp" style="text-align: center">Gmail SMTP</a>
                                    </li>
                                    <li>
                                        <a href="<?= PROOT ?>campaign/launch?service=amazonses" style="text-align:center">Amazon SES</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item ">

                                <a class="btn" style="color: white;background-color: blue;" href='<?= PROOT ?>subscriber/add'><i class="fa fa-plus"></i> Add Subscriber</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:black" href="<?= PROOT ?>user/logout"><i class="fa fa-sign-out"></i>Logout</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>

            <?= $this->content('body'); ?>


        </div>
    </div>
    <footer class="footer" role="contentinfo" style="background-color:lightblue">
        <div class="container">
            <div class="row justify-content-center text-center mb-5" >
                
                <div class="d-flex align-content-end row justify-content-center font-weight-bold ">
                    <div class="border-top container-fluid p-2">
                        <h6 class="text-center pt-3">Pigeon &copy; 2020 , This is the introductory project assigned by <a href='https://coloredcow.com/' target="blank" class="text-white"><img src="https://coloredcow.com/wp-content/themes/ColoredCow/dist/img/logo.png" alt='ColoredCow' width="120" class="mb-2"></a> for the internship.</h6>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </script>
    <script src="<?= $basee ?>js/jquery.min.js"></script>
    <script src="<?= $basee ?>js/popper.js"></script>
    <script src="<?= $basee ?>js/bootstrap.min.js"></script>
    <script src="<?= $basee ?>js/main.js"></script>

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