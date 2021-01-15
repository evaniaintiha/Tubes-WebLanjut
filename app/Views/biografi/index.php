<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
<h2>List Buku Biografi</h2>
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
        <?php foreach($biografis as $index => $biografi): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $biografi->judul ?></td>
                <td>
                    <img class="img-fluid" width="200px" alt="gambar" src="
                    <?= base_url('uploads/'.$biografi->gambar) ?>" />
                </td>
                <td><?= $biografi->stok ?></td>
                <td><?= $biografi->pengarang ?></td>
                <td><?= $biografi->penerbit ?></td>
                <td><?= $biografi->kategori ?></td>
                <td>
                    <a href="<?= site_url('biografi/view/'.$biografi->id) ?>" class="btn btn-primary">View</a>
                    <a href="<?= site_url('biografi/update/'.$biografi->id) ?>" class="btn btn-success">Update</a>
                    <a href="<?= site_url('biografi/delete/'.$biografi->id) ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    

<?= $this->endSection() ?>