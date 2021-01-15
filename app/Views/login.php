<?= $this->extend('layout/login') ?>
<?= $this->section('content') ?> 
<?php
    $username = [
        'name' => 'username',
        'id' => 'username' ,
        'value' => null,
        'class' => 'form-control',
    ];
        
    $password = [
        'name' => 'password' ,
        'id' => 'password' ,
        'class' => 'form-control'
    ];
    
    $session = session();
    $errors = $session->getFlashdata('errors');
?>   

    <!-- <div class="row align-items-center h-100 align-middle">
        <div class="col-6 mx-auto">
            <div class="border border-secondary jumbotron bg-white">
                <div class ="container">
                    <h2 class = "text-primary mb-5"><center>LOGIN FORM</center></h2> -->
                        <?php if($errors != null): ?>
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">Terjadi Kesalahan</h4>
                                <hr>
                                <p class="mb-0">
                                <?php
                                    foreach($errors as $err){ 
                                        echo $err.'<br>';
                                    }
                                    ?> 
                                </p> 
                            </div>

    <?php endif ?>
    <?= form_open('Auth/login') ?>
        <div class = "form_group mb-4">
            <?= form_label("Username", "username")?>
            <div class="input-group-append">
                <?= form_input($username)?>
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div> 
        </div>
        <div class = "form_group mb-4">
            <?= form_label("Password", "password")?>
            <div class="input-group-append">
                <?= form_password($password)?>
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
          </div>
        </div>
        <div class = "row">
            <div class ="col mt-3 text-left">
                <a href="<?= site_url('auth/register') ?>">You need an account? Sign Up</a>
            </div>
            <div class="col mt-3 text-right">
                <?= form_submit('submit', 'Sign In',['class'=>'btn btn-primary']) ?>
            </div>
        </div>

    <?= form_close() ?>   
                <!-- </div>
            </div>
        </div>
    </div>  -->
<?= $this->endSection() ?>    