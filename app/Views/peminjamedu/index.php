<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
<h2>List Pinjaman Kategori Edukasi</h2>
<table class = "table">
    <thead>
        <th>No</th>
        <th>Peminjam</th>
        <th>Judul Buku</th>
        <th>Status</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach($transaksiedu as $index => $transaksiedu): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $transaksiedu->id_peminjam ?></td>
                <td><?= $transaksiedu->id_edukasi ?></td>
                <td><?= $transaksiedu->status ?></td>
                <td>
                    <a href="<?= site_url('transaksiedu/vieww/'.$transaksiedu->id) ?>" class="btn btn-primary">View</a>
                    <a href="<?= site_url('transaksiedu/update/'.$transaksiedu->id) ?>" class="btn btn-success">Update</a>
                    <a href="<?= site_url('transaksiedu/delete/'.$transaksiedu->id) ?>" class="btn btn-danger">Delete</a>

                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    

<?= $this->endSection() ?>