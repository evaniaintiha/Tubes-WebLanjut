<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
<h2>List Daftar Perawatan Kantor (Tanah)</h2>
<table class = "table">
    <thead>
        <th>No</th>
        <th>Kode Registrasi</th>
        <th>Merk dan Jenis</th>
        <th>Ruang</th>
        <th>Tahun Pembelian</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach($tanahs as $index => $tanah): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $tanah->kode ?></td>
                <td><?= $tanah->merk ?></td>
                </td>
                <td><?= $tanah->ruang ?></td>
                <td><?= $tanah->tahun ?></td>
                <td>
                    <a href="<?= site_url('tanah/view/'.$tanah->id) ?>" class="btn btn-primary">View</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    

<?= $this->endSection() ?>