<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
<h2>List Buku Edukasi</h2>
<table class = "table">
    <thead>
        <th>No</th>
        <th>Judul Buku</th>
        <th>Gambar</th>
        <th>Stok</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Kategori</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach($edukasis as $index => $edukasi): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $edukasi->judul ?></td>
                <td>
                    <img class="img-fluid" width="200px" alt="gambar" src="
                    <?= base_url('uploads/'.$edukasi->gambar) ?>" />
                </td>
                <td><?= $edukasi->stok ?></td>
                <td><?= $edukasi->pengarang ?></td>
                <td><?= $edukasi->penerbit ?></td>
                <td><?= $edukasi->kategori ?></td>
                <td>
                    <a href="<?= site_url('edukasi/view/'.$edukasi->id) ?>" class="btn btn-primary">View</a>
                    <a href="<?= site_url('edukasi/update/'.$edukasi->id) ?>" class="btn btn-success">Update</a>
                    <a href="<?= site_url('edukasi/delete/'.$edukasi->id) ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    

<?= $this->endSection() ?>