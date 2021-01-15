<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
    <h1>Detail Buku</h1>
    <div class = "container">
        <div class = "row">
            <div class = "col-6">
                <div class = "card">
                    <div class = "card-body">
                        <img class="img-fluid" alt="image" src="<?= base_url('uploads/'.$biografi->gambar) ?>"/>
                    </div>
                </div>
            </div>
            <div class = "col-6">
                <h1 class = "text-success"><?= $biografi->judul ?></h1>
                <h4>Stok  : <?= $biografi->stok ?></h4>
                <h4>Pengarang  : <?= $biografi->pengarang ?></h4>
                <h4>Penerbit  : <?= $biografi->penerbit ?></h4>
                <h4>Kategori  : <?= $biografi->kategori ?></h4>
            </div> 
        </div>
    </div> 
<?= $this->endSection() ?>