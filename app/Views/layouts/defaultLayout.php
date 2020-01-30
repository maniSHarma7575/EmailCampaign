<?php
$base = PROOT . "public/dashboard/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Pigeon</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700|Roboto:300,400,700&display=swap"
    rel="stylesheet">

  <link href="<?=$base?>vendoor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?=$base?>vendoor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?=$base?>vendoor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="<?=$base?>vendoor/aos/aos.css" rel="stylesheet">
  <link href="<?=$base?>vendoor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


  <link href="<?=$base?>csss/style.css" rel="stylesheet">
</head>

<body>

  <div class="site-wrap">

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-lg-2">
            <h1 class="mb-0 site-logo"><a href="#" class="mb-0">Pigeon</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-lg-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="#" class="nav-link">Home</a></li>
                <li><a class="btn btn-primary mr-3" href="user/login" class="nav-link">Login</a></li>
                <li><a class="btn btn-primary" href="user/register" class="nav-link">Register</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

     
          </div>

        </div>
      </div>

    </header>

    <?= $this->content('body');?>
    
    <footer class="footer" role="contentinfo">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-5">
              <h4 class="section-heading">About us</h2>
		<p>Pigeon is a free open source platform to launch your campaigns and grow your business.</p>
            </div>
	<div class="d-flex align-content-end row justify-content-center font-weight-bold ">
		<div class="border-top container-fluid p-2">
		<p class="text-center pt-3">Pigeon &copy; 2020 , This is the introductory project assigned by <a href='https://coloredcow.com/' target="blank" class="text-white"><img src="https://coloredcow.com/wp-content/themes/ColoredCow/dist/img/logo.png" alt='ColoredCow' width="120" class="mb-2"></a> for the internship.</p>
	</div>
</div>
         </div>
      </div>
    </footer>
  </div> 

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <script src="<?=$base?>vendoor/jquery/jquery.min.js"></script>
  <script src="<?=$base?>vendoor/jquery/jquery-migrate.min.js"></script>
  <script src="<?=$base?>vendoor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?=$base?>vendoor/easing/easing.min.js"></script>
  <script src="<?=$base?>vendoor/php-email-form/validate.js"></script>
  <script src="<?=$base?>vendoor/sticky/sticky.js"></script>
  <script src="<?=$base?>vendoor/aos/aos.js"></script>
  <script src="<?=$base?>vendoor/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?=$base?>jss/main.js"></script>

</body>

</html>