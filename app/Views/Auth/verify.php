<?php $this->setSiteTitle('Verification');?>
<?php $this->start('head');?>
<?php $this->end();?>

<?php $this->start('body');?>
<div class="card text-center">
  <div class="card-header">
  <h3 class="card-title">Thank you for signing in</h3>
  </div>
  <div class="card-body">
    
    <h4 class="card-text">Verify your email address</h4>
    <p class="card-text">Please confirm that you want to use this as your email address</p>
    <a href="<?=PROOT?>home/" class="btn btn-primary">Homepage</a>
  </div>
</div>
<?php $this->end();?>
