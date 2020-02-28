<?php $this->setSiteTitle('Launch Campaign'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="container-fluid">
 
  <div class="row m-5" style="vertical-align:middle;">
  <?php
  //echo $this->displayErrors;
  if (!empty($this->displayErrors)) {
    echo '<div class="alert alert-warning" style="height:45px" role="alert">';
    echo $this->displayErrors;
    echo '</div>';
  } ?>
    <div class="col-lg-12 bg-dark text-white">
      <div class="row" style="background:#58a0c3;">
        <div class="col-lg-6">
          <h3 class="pt-2">New Campaign</h3>
        </div>

      </div>
    </div>
    <div class="col-lg-12 p-0 message-box-input">
      <form method="post" action="">
        <div class="form-group">
          <input type="text" class="form-control" id="campaignname" name="name" required placeholder="Campaign Name">
          <input type="text" class="form-control" id="campaignsubject" name="subject" required placeholder="Subject">
          <textarea class="form-control" id="Description" name="body" required rows="8"></textarea>
        </div>
        <div class="message-box-last-content p-2">
          <button type="submit" class="btn btn-primary btn-sm pl-3 pr-3">SEND</button>
          <span>
            <i class="fa fa-paperclip" aria-hidden="true"></i>
            <i class="fa fa-file" aria-hidden="true"></i>
            <i class="fa fa-picture-o" aria-hidden="true"></i>
            <i class="fa fa-link" aria-hidden="true"></i>
            <i class="fa fa-smile-o" aria-hidden="true"></i>
          </span>
          <span class="pull-right">
            <i class="fa fa-trash-o" aria-hidden="true"></i>
          </span>
        </div>
    </div>
    </form>

  </div>
</div>


<?php $this->end(); ?>