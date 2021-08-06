<?= $this->extend('sidebar') ?>
<?= $this->section('content') ?>
<a href="<?= site_url('kategori/create') ?>" class="btn btn-primary">Tambah Kategori</a>
<br>
</br>
<h2>List Kategori
    <button onclick="window.print()" class="btn btn-outline-secondary shadow float-right">Print PDF<i class="fa fa-print"></i> </button>
</h2>
<div class="col-md-9">
    <form action="<?= base_url('Kategori'); ?>" method="post">
        <div class="row">
            <div class="col-xs-8">
                <div class="input-group">
                    <input class="form-control input-sm" name="key" placeholder="Cari Kategori" type="text" value="">
                    <div class="input-group-btn">
                        <button class="btn-mt-2 btn-sm btn-success" type="submit" name="q" data-toggle="tooltip" title="" data-original-title="Cari">
                            <i class="fa fa-search">
                            </i>
                        </button>
                    </div>
                </div>
    </form>

    <table class="table">
        <thead>
            <th>No</th>
            <th>Sub Kategori</th>
            <th>Kategori</th>
        </thead>
        <tbody>

            <?php foreach ($kategoris as $index => $kategori) : ?>
                <tr>
                    <td><?= ($index + 1) ?></td>
                    <td><?= $kategori->sub ?></td>
                    <td><?= $kategori->kategori ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
</div>

<?= $this->endSection() ?>