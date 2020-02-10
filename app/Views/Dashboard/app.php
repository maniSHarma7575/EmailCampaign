<?php $this->setSiteTitle('Home'); ?>
<?php $this->start('head'); ?>
<meta content="test">
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<h3>Dashboard</h3>
<hr>
<div class="row">
  <div class="col-md-6  ">
    <div class="card text-center" style="padding-top: 25px; padding-bottom: 25px;">
      <span class="icon fa fa-users"></span>
      <h1><?= $this->subCount ?></h1>
      <h4 style='text-align:center; font-weight:bold;'>All your subscriber</h4>

    </div>
  </div>
  <div class="col-md-6">
    <div class="card text-center" style="padding-top: 25px;padding-bottom: 25px;">
      <span class="icon fa fa-envelope"></span>
      <h1><?= $this->campCount ?></h1>
      <h4 style='text-align:center; font-weight:bold;'>All your Campaigns</h4>
    </div>
  </div>

</div>

<h4 style="padding-top: 30px; ">Previous Email Campaigns</h4>
<hr>

<table class="table table-striped id=" 123">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Campaigns</th>
      <th scope="col">Launch by</th>
      <th scope="col">Subject</th>
      <th scope="col">Description</th>
      <th scope="col">Launch On</th>
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

<h4 style="padding-top: 30px; ">Subscribers</h4>
<hr>
<table class="table table-striped ">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Category</th>
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