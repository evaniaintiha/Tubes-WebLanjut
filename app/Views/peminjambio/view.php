<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
    <h1>Detail Peminjaman</h1>
<table class = "table">
    <thead>
        <th>No</th>
        <th>Peminjam</th>
        <th>Judul Buku</th>
        <th>Tanggal Peminjaman</th>
        <th>Deadline Pengembalian</th>
        <th>Denda</th>
        <th>Status</th>
    </thead>
    <tbody>
            <tr>
                <td><?= $transaksibio->id ?></td>
                <td><?= $transaksibio->id_peminjam ?></td>
                <td><?= $transaksibio->id_biografi ?></td>
                <td><?= $transaksibio->created_date ?></td>
                <td><?= $transaksibio->dl_pengembalian ?></td>
                <td><?= $transaksibio->denda ?></td>
                <td><?= $transaksibio->status ?></td>
                
            </tr>
    </tbody>
</table>    

<?= $this->endSection() ?>