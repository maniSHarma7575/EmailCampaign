<?php
$base = PROOT . "public/dashboard/";
?>
<?php $this->start('head');?>
<?php $this->end();?>

<?php $this->start('body');?>

<main id="main">
      <div class="hero-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 hero-text-image">
              <div class="row">
                <div class="col-lg-7 text-center text-lg-left">
                  <h1 >Lauch your campaigns with Pigeon</h1>
                  <h3 class="mb-5">Make your Business take scale up with campaigns</h3>
                  
                </div>
		<div class="col-lg-5 iphone-wrap text-center text-lg-right">
                  <img src="<?=$base?>img/emailfront1.png" class="phone-2" alt="Image"">
                </div>
               
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="site-section">
        <div class="container">

          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-5">
              <h2 class="section-heading">Grow your Business with our services</h2>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <span class="icon lab la-aws"></span>
		
                </div>
                <h3 class="mb-3">Explore Our service</h3>
                <p>Lauch your Campaign either using Gmail SMTP or AmazonSES</p>
              </div>
            </div>
            <div class="col-md-4" >
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <span class="icon la la-users"></span>
                </div>
                <h3 class="mb-3">Build your subscribers</h3>
                <p>Create your subscribers list by adding them to your account.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <span class="icon la la-envelope"></span>
                </div>
                <h3 class="mb-3">Lauch Email Campaigns</h3>
                <p>Launch your business propaganda in one click.</p>
              </div>
            </div>
          </div>

        </div>
      </div> <!-- .site-section -->

      <div class="site-section">
        <div class="container">
          <div class="row justify-content-center text-center mb-5"  >
            
              <img style=" border-radius: 25px;" src="https://cdn.pixabay.com/photo/2018/03/22/02/37/email-3249062_960_720.png" alt="Image" class="img-fluid">
            
          </div>
         </main>

<?php $this->end();?>
