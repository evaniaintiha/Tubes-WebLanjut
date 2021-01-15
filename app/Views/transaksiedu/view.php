<?= $this->extend('sidebar') ?>
<?= $this->section('content') ?>
<table class="table table-striped">
	<thead class="thead-dark">
		
			<div class="col-md">
				<button onclick="window.print()" class="btn btn-outline-secondary shadow float-right">Print PDF<i class="fa fa-print"></i> </button>
		</div>

	<tr>
		<th colspan ="2"><h3>Peminjaman No <?= $transaksiedu->id_trans ?></h3></th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Buku</td>
		<td><?= $transaksiedu->judul ?></td>
	</tr>
	<tr>
		<td>Nama Peminjam</td>
		<td><?= $transaksiedu->username ?></td>
	</tr>
	<tr>
		<td>Jumlah</td>
		<td><?= $transaksiedu->jumlah ?></td>
	</tr>
	<tr>
		<td>Tanggal Peminjaman</td>
		<td><?= $transaksiedu->created_date ?></td>
	</tr>
	</tbody>
</table>
<?= $this->endSection() ?>