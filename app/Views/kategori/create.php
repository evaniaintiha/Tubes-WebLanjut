<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
<?php
    $sub = [
        'name' => 'sub',
        'id' => 'sub',
        'value' => null,
        'class' => 'form-control',
    ];

    $kategori = [
        'name' => 'kategori',
        'id' => 'kategori',
        'value' => null,
        'class' => 'form-control',
    ];

    $submit = [
        'name' => 'submit',
        'id' => 'submit',
        'value' => 'Submit',
        'class' => 'btn btn-success',
        'type' => 'submit',
    ];

?>
<h1>Tambah Data kategori</h1>
<?= form_open_multipart('kategori/create') ?>
    <div class = "form-group">
        <?= form_label("Sub-Kategori","sub") ?>
        <?= form_input($sub) ?>
    </div>

    <div class="form-group">
        <?= form_label("Kategori", "kategori") ?>
        <select class="form-control select4" name="kategori" id="kategori">
        <option value=""></option>
        <option value="Alat Angkutan">Alat Angkutan</option>
        <option value="Alat Kantor & Rumah Tangga">Alat Kantor & Rumah Tangga</option>
        <option value="Alat Studio, Komunikasi, dan Pemancar">Alat Studio, Komunikasi, dan Pemancar</option>
        <option value="Komputer">Komputer</option>
        <option value="Gedung dan Bangunan">Gedung dan Bangunan</option>
    </select>
    </div>


	<div class="text-right">
		<?= form_submit($submit) ?>
	</div>

<?= form_close() ?>
<?= $this->endSection() ?>