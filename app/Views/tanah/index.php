<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
<h2>List Daftar Perawatan Kantor (Gedung & Bangunan)</h2>
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
        <?php foreach($tanahs as $index => $tanah): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $tanah->kode ?></td>
                <td><?= $tanah->merk ?></td>
                </td>
                <td><?= $tanah->ruang ?></td>
                <td>Rp. <?= number_format($tanah->anggaran, 2, ',', '.'); ?></td>
                <td>
                    <a href="<?= site_url('tanah/view/'.$tanah->id) ?>" class="btn btn-primary">View</a>
                    <a href="<?= site_url('tanah/update/'.$tanah->id) ?>" class="btn btn-success">Edit</a>
                    <a href="<?= site_url('tanah/delete/'.$tanah->id) ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    

<?= $this->endSection() ?>