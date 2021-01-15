<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
    <h1>Detail Buku</h1>
    <div class = "container">
        <div class = "row">
            <div class = "col-6">
                <div class = "card">
                    <div class = "card-body">
                        <img class="img-fluid" alt="image" src="<?= base_url('uploads/'.$edukasi->gambar) ?>"/>
                    </div>
                </div>
            </div>
            <div class = "col-6">
                <h1 class = "text-success"><?= $edukasi->judul ?></h1>
                <h4>Stok  : <?= $edukasi->stok ?></h4>
                <h4>Pengarang  : <?= $edukasi->pengarang ?></h4>
                <h4>Penerbit  : <?= $edukasi->penerbit ?></h4>
                <h4>Kategori  : <?= $edukasi->kategori ?></h4>
            </div> 
        </div>
    </div> 
<?= $this->endSection() ?>