<?php
$basee = PROOT . "public/dashboard/";
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    



</head>

<body>

    <div class="wrapper d-flex align-items-stretch">

        <nav id="sidebar" style="background: #0000ff;">
            <div class="p-4 pt-5">
               <a href="#"  class="img logo rounded-circle mb-5" style="background-image: url(<?=$basee?>img/logo.png);"></a>

                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="<?= PROOT ?>dashboard/" style="font-weight:bold;">Home</a>
                    </li>
                    <li>
                        <a href='<?= PROOT ?>campaign/'style="font-weight:bold;">Previous Campaigns</a>
                    </li>
                    <li>
                        <a href="<?= PROOT ?>subscriber/" style="font-weight:bold;">Subscribers</a>
                    </li>
                    <li>
                        <a href="<?= PROOT ?>user/logout" style="font-weight:bold;">Logout</a>
                    </li>

                </ul>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-1 p-md-3">
            <h3 style='text-align:center; color:#0000ff; font-weight:bold;'>Welcome to Pigeon</h3>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary" >
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

    </script>
    <script src="<?= $basee ?>js/jquery.min.js"></script>
    <script src="<?= $basee ?>js/popper.js"></script>
    <script src="<?= $basee ?>js/bootstrap.min.js"></script>
    <script src="<?= $basee ?>js/main.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>