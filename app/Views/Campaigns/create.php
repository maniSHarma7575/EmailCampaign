<?php $this->setSiteTitle('Launch Campaign');?>
<?php $this->start('head');?>
<?php $this->end();?>
<?php $this->start('body');?>
<form method="post" action="">
  <div class="form-group">
    <label for="CampaignName">Campaign Name</label>
    <input type="text" class="form-control" id="campaignname" name="name" required>
  </div>
  <div class="form-group">
    <label for="subjectLine">Subject Line</label>
    <input type="text" class="form-control" id="campaignname" name="subject" required>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="Description" name="body" rows="4" required></textarea>
  </div>
  <div class="form-group">
      <input type="submit" class="btn btn-success">
  </div>
  <?php
    //echo $this->displayErrors;
    if (!empty($this->displayErrors)) {
        echo '<div class="alert alert-warning" style="height:45px" role="alert">';
        echo $this->displayErrors;
        echo '</div>';
    } ?>
</form>
<?php $this->end();?>
