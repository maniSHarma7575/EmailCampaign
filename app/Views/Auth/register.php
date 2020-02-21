<?php $this->setSiteTitle('Register'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<div class="limiter hero-section">
    <div class="container-fluid my-0 py-5 min-vh-100">
        <div class="container-fluid px-md-5 mt-3 mb-3">
            <div class="row mx-lg-4  mx-auto px-auto">
                <div class="col-6 mt-5" style="margin-right:100px">
                    <h2 class="display-4 font-weight-bold text-white " data-aos="fade-right" style="font-family: 'Open Sans', sans-serif;">Get started with a free account</h2>

                    <i>
                        <ul class="mt-4" data-aos="fade-right" data-aos-delay="200" style="list-style-type:none;">
                            <li><i class="las la-envelope" style="color:white;font-size: 30px;display:inline-block;margin-right:10px;"></i>
                                <p data-aos="fade-right" style="display:inline-block;color:#fff;font-weight:bolder;font-size:1.5em;font-family:Times New Roman;">30 Hundred Emails & SMS Sent Every Day</p>
                            </li>
                            <li><i class="las la-users" style="color:white;font-size: 30px; display:inline-block;margin-right:10px;"></i>
                                <p data-aos="fade-right" style="display:inline-block;color:#fff;font-weight:bolder;font-size:1.5em;font-family:Times New Roman;">5,000 Users in all Over India</p>
                            </li>
                            <li><i class="las la-volume-up" style="color:white;font-size: 30px;display:inline-block;margin-right:10px;"></i>
                                <p data-aos="fade-right" style="display:inline-block;color:#fff;font-weight:bolder;font-size:1.5em;font-family:Times New Roman;">Send up to 50 emails free per day</p>
                            </li>
                            <li><i class="las la-headphones" style="color:white;font-size: 30px;display:inline-block;margin-right:10px;"></i>
                                <p data-aos="fade-right" style="display:inline-block;color:#fff;font-weight:bolder;font-size:1.5em;font-family:Times New Roman;">Customer Support</p>
                            </li>
                        </ul>

                    </i>
                </div>
                <div class="offset-lg-0  offset-xl-0 offset-sm-1 col-md-6 col-lg-4 col-xl-4">
                    <div id="first">
                        <div class="myform form mt-4" style="background-color: rgb(255,255,255);border-radius:25px;">

                            <form action="" method="post" style="padding: 20px">
                                <div class="form-group mt-3">

                                    <label for="exampleInputEmail1" style="color: black; font-weight:bold;">Email address</label>
                                    <span style="color:red">*</span></label>

                                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="" required="">

                                </div>
                                <div class="form-group">

                                    <label for="exampleInputUsername" style="color: black; font-weight:bold;">Username</label>
                                    <span style="color:red">*</span></label>

                                    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="" required="">

                                </div>

                                <div class="form-group">
                                    <label for="password" style="color: black; font-weight:bold;">Password</label>
                                    <span style="color:red">*</span></label>
                                    <input type="password" name="password" id="password" class="form-control" aria-describedby="emailHelp" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password" style="color: black; font-weight:bold;">Confirm Password</label>
                                    <span style="color:red">*</span></label>
                                    <input type="password" name="confirm" id="confirmpassword" class="form-control" aria-describedby="emailHelp" placeholder="" required="">
                                </div>



                                <?php
                                if (!empty($this->displayErrors)) {
                                    echo '<p id="errorval" style="color:red; font-weight:bold; font-size:medium;" class="form-group">';
                                    echo $this->displayErrors;
                                    echo '</p>';
                                }
                                ?>
                                <div class="col-md-14 form-group text-center ">
                                    <button type="submit" class=" btn btn-block mybtn btn-primary ">Create Account</button>
                                </div>

                                <div class="row mx-1 my-3">
                                    <hr class="d-inline col" style="border-top: 1px solid black;">
                                    <span class='col-2 text-center' style="color: black; font-weight:bold;">or</span>
                                    <hr class="d-inline col" style="border-top: 1px solid black;">
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <p class="col-1"></p>
                                        <span class='col-10 text-center' style="color: black; font-weight:bold;">Have an account? <a href="<?= PROOT ?>user/login" style="font-size:small; color: rgb(72,72,72);padding-top:10px;">Login</a></span>
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

<?php $this->end(); ?>