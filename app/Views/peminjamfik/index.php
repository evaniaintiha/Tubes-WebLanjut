<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
<h2>List Pinjaman Kategori Fiksi</h2>
<table class = "table">
    <thead>
        <th>No</th>
        <th>Peminjam</th>
        <th>Judul Buku</th>
        <th>Status</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach($transaksifik as $index => $transaksifik): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $transaksifik->id_peminjam ?></td>
                <td><?= $transaksifik->id_fiksi ?></td>
                <td><?= $transaksifik->status ?></td>
                <td>
                    <a href="<?= site_url('transaksifik/vieww/'.$transaksifik->id) ?>" class="btn btn-primary">View</a>
                    <a href="<?= site_url('transaksifik/update/'.$transaksifik->id) ?>" class="btn btn-success">Update</a>
                    <a href="<?= site_url('transaksifik/delete/'.$transaksifik->id) ?>" class="btn btn-danger">Delete</a>

                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    

<?= $this->endSection() ?>