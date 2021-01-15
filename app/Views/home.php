<?= $this->extend('sidebar') ?>
<?= $this->section('content') ?> 
<div class="jumbotron bg-light text-white-50">
	<div class="container text-center">
		<h1>Selamat Datang di Perpustakaan AVA</h1>
			<h4>
				<?php
					echo session()->get('username');
				?>
			</h4>
			</br></br>

		<div class="container card-center" style="width: 40rem;">
  			<img src="/uploads/home_perpus.jpg" class="card-img-top" alt="...">
  		</div>
	</div>
</div>
<?= $this->endSection() ?> 