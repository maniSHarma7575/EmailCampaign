<?php $this->setSiteTitle('Campaigns');?>
<?php $this->start('head');?>
<meta content="test">
<?php $this->end();?>
<?php $this->start('body');?>
<h3 style="padding-top: 30px;font-weight:bold; ">Previous Campaigns</h3>
<hr>
            <table class="table table-striped id="123">
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
                    <?php $x = 0;?>
                    <?php foreach ($this->campaigns as $campaign) {
                        $x = $x + 1;
                    ?>
                        <tr>
                            <td><?= $x ?></td>
                            <td><?= ucwords($campaign->name)?></td>
                            <td><?= $campaign->uemail ?></td>
                            <td><?= $campaign->subject ?></td>
                            <td><?= ucwords($campaign->body) ?></td>
                            <td><?= $campaign->sent_at ?></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

<?php $this->end();?>
