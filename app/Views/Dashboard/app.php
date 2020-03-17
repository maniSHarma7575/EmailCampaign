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
      <h4 class="mb-3" style='text-align:center; font-weight:bold;'>All your subscribers</h4>
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
<input type="text" id="myCampaign" style=" background-image: url('https://www.w3schools.com/css/searchicon.png');
    background-position: 10px 12px;
    background-repeat: no-repeat;
    width: 100%;
    font-size: 16px;
    padding: 12px 20px 12px 40px;
    border: 1px solid #ddd;
    margin-bottom: 12px;" onkeyup="mySearch()" placeholder="Search for Campaign.." />
<table class="table table-striped id=" 123">
  <thead class="thead-light">
    <tr>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">#</th>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">Campaigns</th>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">Launch by</th>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">Subject</th>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">Description</th>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">Created</th>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">Attachment</th>
    </tr>
  </thead>
  <tbody id="myCampaignTable">
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
        <?php
        if ($campaign->attachment == 'notdefined') {
        ?>
          <td></td>
        <?php } else { ?>
          <td><a href="<?= PROOT . substr($campaign->attachment, 28); ?>"><abbr title="Click to open attachment"><i class="fa fa-file fa-2x"></i></abbr></a></td>
        <?php } ?>
      </tr>
    <?php } ?>
  </tbody>
</table>
<?php
if (empty($this->campaigns)) {
?>
  <tr>
    <p style="text-align:center;">Hurry up to launch your first Campaign.</p>
  </tr>
<?php
}
?>
<h3 style="padding-top: 30px;font-weight:bold; ">Subscribers</h3>
<hr>
<input type="text" id="myinput" style=" background-image: url('https://www.w3schools.com/css/searchicon.png');
    background-position: 10px 12px;
    background-repeat: no-repeat;
    width: 100%;
    font-size: 16px;
    padding: 12px 20px 12px 40px;
    border: 1px solid #ddd;
    margin-bottom: 12px;" onkeyup="myFunction()" placeholder="Search for category..">
<table class="table table-striped ">
  <thead class="thead-light">
    <tr>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">#</th>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">Name</th>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">Email</th>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">Category</th>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="myTable">
    <?php $x = 0;
    $j = 0;
    foreach ($this->subscribers as $subscriber) {
      $x = $x + 1;
      $j = $j + 1;
    ?>
      <tr>
        <td><?= $x ?></td>
        <td><?= ucwords($subscriber->name) ?></td>
        <td><?= $subscriber->email ?></td>
        <td><?= ucwords($subscriber->category) ?></td>
        <td><a type="button" data-toggle="modal" data-target="#deleteModal<?= $j ?>" class="delete" title="Delete"><i class="fa fa-trash-o"></i></a>
          <div class="modal fade" id="deleteModal<?= $j ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

            <div class="modal-dialog " role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Delete Confirmation</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Are you sure you want to delete this?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger">
                    <a href="<?= PROOT ?>subscriber/delete?email=<?= $subscriber->email; ?>" style="color: white;">Yes</a>
                  </button>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<?php
if (empty($this->subscribers)) {
?>
  <tr>
    <p style="text-align:center;">Build your subscribers list today.</p>
  </tr>
<?php
}
?>
<?php $this->end(); ?>