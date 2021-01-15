<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
<h2>List Buku Fiksi</h2>
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
        <?php foreach($fiksis as $index => $fiksi): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $fiksi->judul ?></td>
                <td>
                    <img class="img-fluid" width="200px" alt="gambar" src="
                    <?= base_url('uploads/'.$fiksi->gambar) ?>" />
                </td>
                <td><?= $fiksi->stok ?></td>
                <td><?= $fiksi->pengarang ?></td>
                <td><?= $fiksi->penerbit ?></td>
                <td><?= $fiksi->kategori ?></td>
                <td>
                    <a href="<?= site_url('fiksi/view/'.$fiksi->id) ?>" class="btn btn-primary">View</a>
                    <a href="<?= site_url('fiksi/update/'.$fiksi->id) ?>" class="btn btn-success">Update</a>
                    <a href="<?= site_url('fiksi/delete/'.$fiksi->id) ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    

<?= $this->endSection() ?>