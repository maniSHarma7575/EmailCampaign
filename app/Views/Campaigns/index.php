<?php $this->setSiteTitle('Campaigns');?>
<?php $this->start('head');?>
<meta content="test">
<?php $this->end();?>
<?php $this->start('body');?>
<h3>Campaigns</h3>
            <table class="table id="123">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Description</th>
                        <th scope="col">Launch On</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $x = 0;?>
                    <?php foreach ($this->campaigns as $campaign) {
                        $x = $x + 1;
                    ?>
                        <tr>
                            <td><?= $x ?></td>
                            <td><?= $campaign->uemail ?></td>
                            <td><?= $campaign->subject ?></td>
                            <td><?= ucwords($campaign->body) ?></td>
                            <td><?= $campaign->sent_at ?></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

<?php $this->end();?>
