<?php $this->setSiteTitle('Subscriber'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<h3 style="padding-top: 30px;font-weight:bold; ">Subscribers</h3>
<hr>
<table class="table table-striped ">
  <thead class="thead-light">
    <tr>
      <th style="color:black;font-weight:bold;background:#58a0c3;"  scope="col">#</th>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">Name</th>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">Email</th>
      <th style="color:black;font-weight:bold;background:#58a0c3;" scope="col">Category</th>
    </tr>
  </thead>
  <tbody>
      <?php $x=0;?>
      <?php foreach($this->subscribers as $subscriber){
          $x=$x+1;
        ?>
    <tr>
        <td><?=$x?></td>
      <td><?= ucwords($subscriber-> name)?></td>
      <td><?= $subscriber-> email?></td>
      <td><?= ucwords($subscriber-> category)?></td>
    </tr>
      <?php }?>
    
  </tbody>
</table>
<?php $this->end(); ?>