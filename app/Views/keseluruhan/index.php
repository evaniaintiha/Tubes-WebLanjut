<?= $this->extend('sidebar') ?>
<?= $this->section('content') ?>
<?php
function tanggal_indo($tanggal)
{
    if ($tanggal == NULL) {
        return "";
    } else {
        $tanggal = date_create($tanggal);
        $tanggal = date_format($tanggal, "d-m-Y");
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecah = explode('-', $tanggal);
        return $pecah[0] . " " . $bulan[(int)$pecah[1]] . " " . $pecah[2];
    }
}
?>

<h2>Daftar Keseluruhan Perawatan Kantor
    <button onclick="window.print()" class="btn btn-outline-secondary shadow float-right">Print PDF<i class="fa fa-print"></i> </button>
</h2>
<table class="table" id="tabelkeseluruhan">
    <thead>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Merk dan Jenis</th>
        <th>Ruang</th>
        <th>Anggaran Terpakai</th>
        <th>Tanggal Perawatan</th>
        <th>Keterangan</th>
    </thead>
    <tbody>
        <?php $index = 1; ?>
        <?php foreach ($data as $d) : ?>
            <?php foreach ($d as $x) : ?>
                <tr>
                    <td><?= $index++ ?></td>
                    <td><?= $x->kode ?></td>
                    <td><?= $x->merk ?></td>
                    </td>
                    <td><?= $x->ruang ?></td>
                    <td>Rp. <?= number_format($x->anggaran, 2, ',', '.'); ?></td>
                    <td><?= tanggal_indo($x->perawatan) ?></td>
                    <td><?= $x->catatan ?>
                    </td>
                </tr>
            <?php endforeach ?>
        <?php endforeach; ?>
    </tbody>
</table>


<script>
    $(document).ready(function() {
        $('#tabelkeseluruhan').DataTable({
            "lengthMenu":[10,25,50,100,500,1000]
        });
    });
</script>

<?= $this->endSection() ?>