<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
<h2>List Daftar Perawatan Kantor (Komputer)</h2>
<button onclick="window.print()" class="btn btn-outline-secondary shadow float-right">Print PDF<i class="fa fa-print"></i> </button>
<table class = "table">
    <thead>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Merk dan Jenis</th>
        <th>Ruang</th>
        <th>Tahun Pembelian</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach($komputers as $index => $komputer): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $komputer->kode ?></td>
                <td><?= $komputer->merk ?></td>
                </td>
                <td><?= $komputer->ruang ?></td>
                <td><?= $komputer->tahun ?></td>
                <td>
                    <a href="<?= site_url('komputer/view/'.$komputer->id) ?>" class="btn btn-primary">View</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    

<?= $this->endSection() ?>