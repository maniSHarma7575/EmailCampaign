<?php $this->setSiteTitle('Launch Campaign'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="container-fluid">
  <div class="row m-5" style="vertical-align:middle;">
    <?php
    if (!empty($this->displayErrors)) {
      if ($this->displayErrors == 'No') { ?>
        <script>
          swal("Oops!", "Build your subscriber list today", "error");
        </script>
    <?php } else {
        echo '<div class="alert alert-warning" style="height:45px" role="alert">';
        echo $this->displayErrors;
        echo '</div>';
      }
    } ?>
    <div class="col-lg-12 bg-dark text-white">
      <div class="row" style="background:#58a0c3;">
        <div class="col-lg-6">
          <h4 class="pt-2" style="color:black;font-weight:bold;">New Campaign</h4>
        </div>
        <div class="col-lg-6 pt-2 message-box-icon">
          <span class="pull-right">
            <a href="<?= PROOT ?>Dashboard/"><i class="fa fa-times" title="Open dashboard" aria-hidden="true"></i></a>
          </span>
        </div>
      </div>
    </div>
    <div class="col-lg-12 p-0 message-box-input">
      <form method="post" action="" enctype="multipart/form-data" id="campaignform">
        <div class="form-group pb-2">
          <input type="text" class="form-control" id="campaignname" name="name" required placeholder="Campaign Name" value="<?= $this->post['name']; ?>">
          <input type="text" class="form-control" id="campaignsubject" name="subject" required placeholder="Subject" value="<?= $this->post['subject']; ?>">
          <textarea class="form-control" id="Description" name="body" required rows="8" value="<?= $this->post['body']; ?>"></textarea>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-list-alt" style="color: blue;"></i> </span>
            </div>
            <select class="form-control selectpicker" id="category" name="category">
              <?php
              $categories = categoryList();
              foreach ($categories as $category) {
              ?>
                <option value="<?= $category ?>"><?= $category ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="message-box-last-content p-2">
          <button type="submit" class="btn btn-primary btn-sm">SEND</button>
          <span>
            <input type="file" name="uploaded_file" />
          </span>
          <span class="pull-right">
            <i class="fa fa-cut " title="Clear all fields" onclick="document.getElementById('campaignform').reset();" aria-hidden="true"></i>
          </span>
        </div>
    </div>
    </form>
  </div>
</div>
<?php $this->end(); ?>