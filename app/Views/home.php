<?= $this->extend('sidebar') ?>
<?= $this->section('content') ?>
<div class="small-box bg-green">
	<div class="inner">
		<h3>Rp. <?= number_format($total, 2, ',', '.'); ?></h3>
		<p> Anggaran Yang Terpakai</p>
		<br>
	</div>
	<div class="icon">
		<i class="ion ion-cash">
		</i>
	</div>
</div>
<div class="jumbotron bg-light text-white-50">
	<div class="container text-center">
		<h1>Selamat Datang di Sistem Informasi Inventaris Pemeliharaan Peralatan Kantor Bappeda</h1>
		<h4>
			<?php
			echo session()->get('username');
			?>
		</h4>
		</br></br>

		<div class="container card-center" style="width: 50rem;">
			<img src="/img/kantor.jpg" class="card-img-top" alt="...">
		</div>
	</div>
</div>
<?= $this->endSection() ?>