<?php $this->setSiteTitle('Subscriber'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<h3>Subscribers</h3>
<hr>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Category</th>
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