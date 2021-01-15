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
                <td><?= $transaksiedu->id ?></td>
                <td><?= $transaksiedu->id_peminjam ?></td>
                <td><?= $transaksiedu->id_edukasi ?></td>
                <td><?= $transaksiedu->created_date ?></td>
                <td><?= $transaksiedu->dl_pengembalian ?></td>
                <td><?= $transaksiedu->denda ?></td>
                <td><?= $transaksiedu->status ?></td>
                
            </tr>
    </tbody>
</table>    

<?= $this->endSection() ?>