<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
<h2>List Pinjaman Kategori Biografi</h2>
<table class = "table">
    <thead>
        <th>No</th>
        <th>Peminjam</th>
        <th>Judul Buku</th>
        <th>Status</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach($transaksibio as $index => $transaksibio): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $transaksibio->id_peminjam ?></td>
                <td><?= $transaksibio->id_biografi ?></td>
                <td><?= $transaksibio->status ?></td>
                <td>
                    <a href="<?= site_url('transaksibio/vieww/'.$transaksibio->id) ?>" class="btn btn-primary">View</a>
                    <a href="<?= site_url('transaksibio/update/'.$transaksibio->id) ?>" class="btn btn-success">Update</a>
                    <a href="<?= site_url('transaksibio/delete/'.$transaksibio->id) ?>" class="btn btn-danger">Delete</a>

                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    

<?= $this->endSection() ?>