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
        <?php foreach($model as $index => $m): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $m->judul ?></td>
                <td>
                    <img class="img-fluid" width="200px" alt="gambar" src="
                    <?= base_url('uploads/'.$m->gambar) ?>" />
                </td>
                <td><?= $m->stok ?></td>
                <td><?= $m->pengarang ?></td>
                <td><?= $m->penerbit ?></td>
                <td><?= $m->kategori ?></td>
                <td>
                    <a href="<?= site_url('edukasiu/pinjam/'.$m->id) ?>" class="btn btn-success">Pinjam</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    

<?= $this->endSection() ?>