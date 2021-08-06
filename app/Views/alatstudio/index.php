<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
<h2>List Daftar Perawatan Kantor (Alat Studio, Komunikasi, & Pemancar)
<button onclick="window.print()" class="btn btn-outline-secondary shadow float-right">Print PDF<i class="fa fa-print"></i> </button></h2>
<table class = "table">
    <thead>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Merk dan Jenis</th>
        <th>Ruang</th>
        <th>Anggaran Terpakai</th>
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
                <td>Rp. <?= number_format($alatstudio->anggaran, 2, ',', '.'); ?></td>
                <td>
                    <a href="<?= site_url('alatstudio/view/'.$alatstudio->id) ?>" class="btn btn-primary">View</a>
                    <a href="<?= site_url('alatstudio/update/'.$alatstudio->id) ?>" class="btn btn-success">Edit</a>
                    <a href="<?= site_url('alatstudio/delete/'.$alatstudio->id) ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    

<?= $this->endSection() ?>