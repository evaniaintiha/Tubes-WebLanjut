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
                <td><?= $transaksifik->id ?></td>
                <td><?= $transaksifik->id_peminjam ?></td>
                <td><?= $transaksifik->id_fiksi ?></td>
                <td><?= $transaksifik->created_date ?></td>
                <td><?= $transaksifik->dl_pengembalian ?></td>
                <td><?= $transaksifik->denda ?></td>
                <td><?= $transaksifik->status ?></td>
                
            </tr>
    </tbody>
</table>    

<?= $this->endSection() ?>