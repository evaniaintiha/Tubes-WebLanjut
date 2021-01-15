<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
    <h1>Detail Buku</h1>
    <div class = "container">
        <div class = "row">
            <div class = "col-6">
                <div class = "card">
                    <div class = "card-body">
                        <img class="img-fluid" alt="image" src="<?= base_url('uploads/'.$fiksi->gambar) ?>"/>
                    </div>
                </div>
            </div>
            <div class = "col-6">
                <h1 class = "text-success"><?= $fiksi->judul ?></h1>
                <h4>Stok  : <?= $fiksi->stok ?></h4>
                <h4>Pengarang  : <?= $fiksi->pengarang ?></h4>
                <h4>Penerbit  : <?= $fiksi->penerbit ?></h4>
                <h4>Kategori  : <?= $fiksi->kategori ?></h4>
            </div> 
        </div>
    </div> 
<?= $this->endSection() ?>