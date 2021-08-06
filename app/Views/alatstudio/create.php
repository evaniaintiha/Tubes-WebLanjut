<?= $this->extend('sidebar') ?>
<?= $this->section('content') ?>
<?php
$ruang = [
    'name' => 'ruang',
    'id' => 'ruang',
    'value' => null,
    'class' => 'form-control',
];

$kode = [
    'name' => 'kode',
    'id' => 'kode',
    'value' => null,
    'class' => 'form-control',
];

$tahun = [
    'name' => 'tahun',
    'id' => 'tahun',
    'value' => null,
    'class' => 'form-control',
    'type' => 'number',
    'min' => 0,
];

$gambar = [
    'name' => 'gambar',
    'id' => 'gambar',
    'value' => null,
    'class' => 'form-control',
];

$gambar2 = [
    'name' => 'gambar2',
    'id' => 'gambar2',
    'value' => 'null',
    'class' => 'form-control',
];

$perawatan = [
    'name' => 'perawatan',
    'id' => 'perawatan',
    'value' => null,
    'class' => 'form-control',
    'type' => 'date',
];

$anggaran = [
    'name' => 'anggaran',
    'id' => 'anggaran',
    'value' => null,
    'class' => 'form-control',
    'type' => 'number',
    'min' => 0,
];

$merk = [
    'name' => 'merk',
    'id' => 'merk',
    'value' => null,
    'class' => 'form-control',
];

$status = [
    'name' => 'status',
    'id' => 'status',
    'value' => null,
    'class' => 'form-control',

];

$catatan = [
    'name' => 'catatan',
    'id' => 'catatan',
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

$session = session();
$errors = $session->getFlashdata('errors');

?>

<?php if ($errors != null) : ?>
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Terjadi Kesalahan</h4>
        <hr>
        <p class="mb-0">
            <?php
            foreach ($errors as $err) {
                echo $err . '<br>';
            }
            ?>
        </p>
    </div>

<?php endif ?>

<h1>Tambah Data Perawatan Alat Studio, Komunikasi, & Pemancar</h1>
<?= form_open_multipart('Alatstudio/create') ?>
<div class="form-group">
    <?= form_label("Merk dan Jenis", "merk") ?>
    <?= form_input($merk) ?>
</div>

<div class="form-group">
    <?= form_label("Kode Barang", "kode") ?>
    <?= form_input($kode) ?>
</div>

<div class="form-group">
    <?= form_label("Tahun Pembelian", "tahun") ?>
    <?= form_input($tahun) ?>
</div>

<div class="form-group">
    <?= form_label("Tanggal Perawatan", "perawatan") ?>
    <?= form_input($perawatan) ?>
</div>

<div class="form-group">
    <?= form_label("Ruang", "ruang") ?>
    <?= form_input($ruang) ?>
</div>

<div class="form-group">
    <?= form_label("Kendala", "status") ?>
    <?= form_input($status) ?>

</div>

<div class="form-group">
    <?= form_label("Keterangan", "catatan") ?>
    <?= form_input($catatan) ?>
</div>

<div class="form-group">
    <?= form_label("Anggaran", "anggaran") ?>
    <?= form_input($anggaran) ?>
</div>

<div class="form-group">
    <?= form_label("Nota", "gambar") ?>
    <?= form_upload($gambar) ?>
</div>

<div class="form-group">
    <?= form_label("Dokumentasi", "gambar2") ?>
    <?= form_upload($gambar2) ?>
</div>

<div class="text-right">
    <?= form_submit($submit) ?>
</div>

<?= form_close() ?>
<?= $this->endSection() ?>