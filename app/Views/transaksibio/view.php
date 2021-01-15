<?= $this->extend('sidebar') ?>
<?= $this->section('content') ?>
<div class="col-md">
<table class="table table-striped">
	<thead class="thead-dark">
		
			<div class="col-md">
				<button onclick="window.print()" class="btn btn-outline-secondary shadow float-right">Print PDF<i class="fa fa-print"></i> </button>
		</div>

	<tr>
		<th 
		colspan ="2"><h3>Peminjaman No <?= $transaksibio->id_trans ?></h3>
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Buku</td>
		<td><?= $transaksibio->judul ?></td>
	</tr>
	<tr>
		<td>Nama Peminjam</td>
		<td><?= $transaksibio->username ?></td>
	</tr>
	<tr>
		<td>Jumlah</td>
		<td><?= $transaksibio->jumlah ?></td>
	</tr>
	<tr>
		<td>Tanggal Peminjaman</td>
		<td><?= $transaksibio->created_date ?></td>
	</tr>
	</tbody>
</table>
<?= $this->endSection() ?>