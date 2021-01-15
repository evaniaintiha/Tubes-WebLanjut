<?= $this->extend('sidebar') ?>
<?= $this->section('content') ?> 

<!-- About Me Box -->
	<div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">About Us</h3>
        </div>
            <!-- /.card-header -->
    <div class="card-body">
        <strong><i class="fa fa-user fa-stack-1"></i> NAMA</strong>
   	    <p class="text-muted">
                  <span class="tag tag-danger">Evania Intiha</br><span>
                  <span class="tag tag-success">Azzah Roudhoh</br></span>
                  <span class="tag tag-info">Agnes Pramudani</span>
                </p>

                <hr>

   	    <strong><i class="fas fa-pencil-alt mr-1"></i> NPM</strong>
        <p class="text-muted">
                  <span class="tag tag-danger">1817051044</br><span>
                  <span class="tag tag-success">1857051001</br></span>
                  <span class="tag tag-info">1857051004</span>
                </p>

                <hr>

        <strong><i class="fas fa-map-marker-alt mr-1"></i> JURUSAN</strong>
        <p class="text-muted">Ilmu Komputer</p>
       
        <hr>

        <strong><i class="fas fa-map-marker-alt mr-1"></i> FAKULTAS</strong>
        <p class="text-muted">Matematika dan Ilmu Pengetahuan Alam</p>
    </div>
<?= $this->endSection() ?> 