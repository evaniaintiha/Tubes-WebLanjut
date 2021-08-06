<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
<h2>List Daftar Perawatan Kantor (Alat Angkutan)
<button onclick="window.print()" class="btn btn-outline-secondary shadow float-right">Print PDF<i class="fa fa-print"></i> </button></h2>
<table class = "table">
    <thead>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Merk dan Jenis</th>
        <th>Ruang</th>
        <th>Tahun Pembelian</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach($alatangkutans as $index => $alatangkutan): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $alatangkutan->kode ?></td>
                <td><?= $alatangkutan->merk ?></td>
                </td>
                <td><?= $alatangkutan->ruang ?></td>
                <td><?= $alatangkutan->tahun ?></td>
                <td>
                    <a href="<?= site_url('alatangkutan/view/'.$alatangkutan->id) ?>" class="btn btn-primary">View</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    

<?= $this->endSection() ?>