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
        <td>
          <div class="row">
            <div class="col-6">
              <a type="button" style="text-align:left;" data-toggle="modal" data-target="#deleteModal<?= $j ?>" class="delete" title="Delete"><i class="fa fa-trash-o"></i></a>
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
            </div>
            <div class="col-6">
              <a type="button" style="text-align:right;" data-toggle="modal" data-target="#EditModal<?= $j ?>" title="Edit"><i class="fa fa-edit"></i></a>
              <div class="modal fade " id="EditModal<?= $j ?>" role="dialog" style="border-radius:25px;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="ModalLabel2" style="color:black;font-weight:bold;">Edit Subscriber Information</h5>
                      <button type="button" class="close text-black" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="text-center">
                            <form class="mt-2" id="subinfoForm">
                              <fieldset>
                                <input type="hidden" class="form-control" name='subEmail' id='subEmail' value="<?= $subscriber->email ?>" />
                                <h6 class="text-left">Email Address*</h6>
                                <div class="form-group input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-envelope" style="color: blue;"></i> </span>
                                  </div>
                                  <input type="email" class="form-control" id='subscriberemail' name='subscriberemail' type="email" value="<?= $subscriber->email ?>" required="">
                                </div>
                                <h6 class="text-left">Name*</h6>
                                <div class="form-group input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user" style="color: blue;"></i> </span>
                                  </div>
                                  <input type="text" class="form-control" id='subscribername' name='subscribername' type="text" value="<?= ucwords($subscriber->name) ?>" required="">
                                </div>
                                <h6 class="text-left">Category*</h6>
                                <div class="form-group input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-list-alt" style="color: blue;"></i> </span>
                                  </div>
                                  <select class="form-control selectpicker" id="subscribercategory" name="subscribercategory">
                                    <option value="<?= ucwords($subscriber->category) ?>"><?= ucwords($subscriber->category) ?></option>
                                    <?php
                                    $categories = categoryList();
                                    foreach ($categories as $category) {
                                    ?>
                                      <option value="<?= $category ?>"><?= $category ?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                                <p class="text-left"><a style="color:darkblue;border-radius:5px;" onclick="myCategory();"><i class="pr-2 fa fa-plus"></i>Add New Category</a></p>
                                <div style="display:none" id="categoryform">
                                  <form class="mt-2">
                                    <div class="row">
                                      <div class="form-group input-group col-9">

                                        <input type="text" class="form-control" id='newcategory' name='newcategory' type="text" required="" placeholder="Category">

                                      </div>
                                      <div class="form-group col-3">
                                        <button type="button" id="category" style="height:38px;background:green;color:white;" class="btn btn-block"><i class="pr-2 fa fa-plus" style="vertical-align:top;text-align:center"></i></button>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                                <div class="form-group mt-2">
                                  <button type="button" id="submitEdit" class="btn btn-primary btn-block">Update</button>
                                </div>
                              </fieldset>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
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