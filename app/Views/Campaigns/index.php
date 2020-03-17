<?php $this->setSiteTitle('Campaigns'); ?>
<?php $this->start('head'); ?>
<meta content="test">
<?php $this->end(); ?>
<?php $this->start('body'); ?>
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
<table class="table table-striped" id="123">
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
                <td>
                    <p><?= ucwords($campaign->body) ?></h1>
                    </p>
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
<?php $this->end(); ?>