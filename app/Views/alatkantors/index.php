<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
<h2>List Daftar Perawatan Kantor (Alat Kantor & Rumah Tangga)</h2>
<button onclick="window.print()" class="btn btn-outline-secondary shadow float-right">Print PDF<i class="fa fa-print"></i> </button>
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
        <?php foreach($alatkantors as $index => $alatkantor): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $alatkantor->kode ?></td>
                <td><?= $alatkantor->merk ?></td>
                </td>
                <td><?= $alatkantor->ruang ?></td>
                <td><?= $alatkantor->tahun ?></td>
                <td>
                    <a href="<?= site_url('alatkantor/view/'.$alatkantor->id) ?>" class="btn btn-primary">View</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    

<?= $this->endSection() ?>