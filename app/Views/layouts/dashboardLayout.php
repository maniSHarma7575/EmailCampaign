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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= $basee ?>css/style.css">

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
                        <a href="<?=PROOT?>dashboard/">Home</a>
                    </li>
                    <li>
                        <a href="#">Email Campaigns</a>
                    </li>

                    <li>
                        <a href="<?= PROOT ?>subscriber/">Subscribers</a>
                    </li>
                    <li>
                        <a href="<?= PROOT ?>user/logout">Logout</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="#">Page 1</a>
                            </li>
                            <li>
                                <a href="#">Page 2</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
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
                            <li class="nav-item mr-xl-2">
                                <a class="btn btn-success" style="color: white" href='<?= PROOT ?>campaign/'><i class="fa fa-envelope"></i>Previous Campaigns</a>
                            </li>
                            <li class="nav-item ">

                                <a class="btn btn-danger" style="color: white" href='<?= PROOT ?>subscriber/add'><i class="fa fa-plus"></i> Add Subscriber</a>
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