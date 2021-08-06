<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
<h2>List Daftar Perawatan Kantor (Alat Studio, Komunikasi, & Pemancar)</h2>
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
        <?php foreach($alatstudios as $index => $alatstudio): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $alatstudio->kode ?></td>
                <td><?= $alatstudio->merk ?></td>
                </td>
                <td><?= $alatstudio->ruang ?></td>
                <td><?= $alatstudio->tahun ?></td>
                <td>
                    <a href="<?= site_url('alatstudio/view/'.$alatstudio->id) ?>" class="btn btn-primary">View</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    

<?= $this->endSection() ?>