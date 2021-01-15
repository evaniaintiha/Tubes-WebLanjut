<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
<?php

    $status = [
        'name' => 'status',
        'id' => 'status',
        'value' => $transaksiedu->status,
        'class' => 'form-control',
    ];

    $submit = [
        'name' => 'submit',
        'id' => 'submit',
        'type' => 'submit',
        'value' => 'Submit',
        'class' => 'btn btn-success',
    ];

?>
<h1>Edit Peminjaman</h1>
<?= form_open_multipart('pengembalianedu/update/'.$transaksiedu->id) ?>
    <div class = "form-group">
        <?= form_label("ID_edukasi","id_edukasi") ?>
    </div>

	<div class="form-group">
		<?= form_label("ID_peminjam", "id_peminjam") ?>
	</div>

     <div class="form-group">
        <?= form_label("Jumlah", "jumlah") ?>
    </div>

     <div class="form-group">
        <?= form_label("Denda", "denda") ?>
    </div>

     <div class="form-group">
        <?= form_label("DL_pengembalian", "dl_pengembalian") ?>
    </div>

    <div class="form-group">
        <?= form_label("Status", "status") ?>
        <?= form_input($status) ?>
    </div>

	<div class="text-right">
		<?= form_submit($submit) ?>
	</div>

<?= form_close() ?>
<?= $this->endSection() ?>