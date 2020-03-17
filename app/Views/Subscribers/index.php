<?php $this->setSiteTitle('Subscriber'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
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
    $j = 11; ?>
    <?php foreach ($this->subscribers as $subscriber) {
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