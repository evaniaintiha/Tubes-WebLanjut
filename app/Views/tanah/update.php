<?= $this->extend('sidebar') ?>
<?= $this->section('content') ?>
<?php
$merk = [
    'name' => 'merk',
    'id' => 'merk',
    'value' => $tanah->merk,
    'class' => 'form-control',
];

$kode = [
    'name' => 'kode',
    'id' => 'kode',
    'value' => $tanah->kode,
    'class' => 'form-control',
];

$tahun = [
    'name' => 'tahun',
    'id' => 'tahun',
    'value' => $tanah->tahun,
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
    'value' => null,
    'class' => 'form-control',
];

$perawatan = [
    'name' => 'perawatan',
    'id' => 'perawatan',
    'value' => $tanah->perawatan,
    'class' => 'form-control',
    'type' => 'date',
];

$anggaran = [
    'name' => 'anggaran',
    'id' => 'anggaran',
    'value' => $tanah->anggaran,
    'class' => 'form-control',
    'type' => 'number',
    'min' => 0,
];

$ruang = [
    'name' => 'ruang',
    'id' => 'ruang',
    'value' => $tanah->ruang,
    'class' => 'form-control',
];

$status = [
    'name' => 'status',
    'id' => 'status',
    'value' => $tanah->status,
    'class' => 'form-control',

];



$catatan = [
    'name' => 'catatan',
    'id' => 'catatan',
    'value' => $tanah->catatan,
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
<h1>Update Data</h1>
<?= form_open_multipart('tanah/update/' . $tanah->id) ?>
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

<iframe src="<?= base_url('uploads/' . $tanah->gambar) ?>" width="300" height="150"></iframe>

<div class="form-group">
    <?= form_label("Nota & Dokumentasi", "gambar") ?>
    <?= form_upload($gambar) ?>
</div>

<iframe src="<?= base_url('uploads/' . $tanah->gambar2) ?>" width="300" height="150"></iframe>

<div class="form-group">
    <?= form_label("Dokumentasi", "gambar2") ?>
    <?= form_upload($gambar2) ?>
</div>

<div class="text-right">
    <?= form_submit($submit) ?>
</div>

<?= form_close() ?>
<?= $this->endSection() ?>