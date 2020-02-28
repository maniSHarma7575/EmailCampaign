<?php $this->setSiteTitle('Home'); ?>
<?php $this->start('head'); ?>
<meta content="test">
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<h3 style='font-weight:bold;'>Dashboard</h3>
<hr>
<div class="row">
        
        <div class="col-md-6">
          <div class="feature-1 text-center">
            <div class="wrap-icon icon-1">
              <span class="icon la la-users"></span>
            </div>
            <h4 class="mb-3" style='text-align:center; font-weight:bold;'>All your subscriber</h4>
            <h1><?= $this->subCount ?></h1>
          </div>
        </div>
        <div class="col-md-6">
          <div class="feature-1 text-center">
            <div class="wrap-icon icon-1">
              <span class="icon la la-envelope"></span>
            </div>
            <h4 class="mb-3" style='text-align:center; font-weight:bold;'>All your Campaigns</h4>
            <h1><?= $this->campCount ?></h1>
          </div>
        </div>
      </div>

<h3 style="padding-top: 30px;font-weight:bold; ">Previous Campaigns</h3>
<hr>

<table class="table table-striped id=" 123">
  <thead class="thead-light">
    <tr>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">#</th>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">Campaigns</th>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">Launch by</th>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">Subject</th>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">Description</th>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">Created</th>
    </tr>
  </thead>
  <tbody>
    <?php $x = 0; ?>
    <?php foreach ($this->campaigns as $campaign) {
      $x = $x + 1;
    ?>
      <tr>
        <td><?= $x ?></td>
        <td><?= ucwords($campaign->name) ?></td>
        <td><?= $campaign->uemail ?></td>
        <td><?= $campaign->subject ?></td>
        <td><?= ucwords($campaign->body) ?></td>
        <td><?= $campaign->sent_at ?></td>
      </tr>
    <?php } ?>

  </tbody>
</table>

<h3 style="padding-top: 30px;font-weight:bold; ">Subscribers</h3>
<hr>
<table class="table table-striped ">
  <thead class="thead-light">
    <tr>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">#</th>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">Name</th>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">Email</th>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">Category</th>
    </tr>
  </thead>
  <tbody>
    <?php $x = 0; ?>
    <?php foreach ($this->subscribers as $subscriber) {
      $x = $x + 1;
    ?>
      <tr>
        <td><?= $x ?></td>
        <td><?= ucwords($subscriber->name) ?></td>
        <td><?= $subscriber->email ?></td>
        <td><?= ucwords($subscriber->category) ?></td>
      </tr>
    <?php } ?>

  </tbody>
</table>



<?php $this->end(); ?>