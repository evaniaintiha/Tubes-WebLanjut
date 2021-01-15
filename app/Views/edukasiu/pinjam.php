<?= $this->extend('sidebar') ?>
<?= $this->section('content') ?>
<?php
	$id_edukasi = [
		'name' => 'id_edukasi',
		'id' => 'id_edukasi',
		'value' => $model->id,
		'type' => 'hidden'
	];

	$id_peminjam = [
		'name' => 'id_peminjam',
		'id' => 'id_peminjam',
		'value' => session()->get('id'),
		'type' => 'hidden'
	];

	$jumlah = [
		'name' => 'jumlah',
		'id' => 'jumlah',
		'value' => 1,
		'min' => 1,
		'class' => 'form-control',
		'type' => 'number',
		'max' => $model->stok,
	];
	
	$submit = [
		'name' => 'submit',
		'id' => 'submit',
		'type' => 'submit',
		'value' => 'Checkout',
		'class' => 'btn btn-success',
	];
?>
<h2>Keranjang</h2>
<div class ="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class ="card-body text-center">
                <img class="img-fluid" style="height: 200px; width: 200px;" 
                src="<?= base_url('uploads/'.$model->gambar) ?>" />
                <h3 class="text-success"><?= $model->judul ?></h3>
                <h4 class="text-info">Stok : <?= $model->stok?></h4>
                </div>
            </div>
        </div>
        <div class ="col-6">
            <?= form_open('Edukasiu/pinjam') ?>
                <?= form_input($id_edukasi) ?>
                <?= form_input($id_peminjam) ?>
                <div class="form-group">
					<?= form_label('Jumlah Peminjaman', 'jumlah') ?>
					<?= form_input($jumlah) ?>
				</div>
                <div class="text-right">
					<?= form_submit($submit) ?>
				</div>
            <?= form_close() ?>
        </div>
    </div>
</div>


<?= $this->endSection() ?>
<?= $this->section('script') ?>
		<script>
			$('document').ready(function(){
				var jumlah_peminjaman = 1;
				$("#jumlah").on("change", function(){
				jumlah_peminjaman = $("#jumlah").val();
				});
			});
		</script>
<?= $this->endSection() ?>