<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
<?php

    $jumlah = [
        'name' => 'jumlah',
        'id' => 'jumlah',
        'value' => $transaksibio->jumlah,
        'class' => 'form-control',
    ];

    $denda = [
        'name' => 'denda',
        'id' => 'denda',
        'value' => $transaksibio->denda,
        'class' => 'form-control',
    ];

    $dl_pengembalian = [
        'name' => 'dl_pengembalian',
        'id' => 'dl_pengembalian',
        'value' => $transaksibio->dl_pengembalian,
        'class' => 'form-control',
    ];

    $status = [
        'name' => 'status',
        'id' => 'status',
        'value' => $transaksibio->status,
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
<?= form_open_multipart('Transaksibio/update/'.$transaksibio->id) ?>
    <div class = "form-group">
        <?= form_label("ID_biografi","id_biografi") ?>
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