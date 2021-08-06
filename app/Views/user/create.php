<?= $this->extend('sidebar')?>
<?= $this->section('content')?>

<?php
          $username = [
              'name' => 'username',
              'id' => 'username' ,
              'value' => null,
              'class' => 'form-control'
        ];
          
          $password = [
              'name' => 'password' ,
              'id' => 'password' ,
              'class' => 'form-control'
        ];

          $repeatPassword = [
            'name' => 'repeatPassword' ,
            'id' => 'repeatPassword' ,
            'class' => 'form-control'
        ];
        
        $submit = [
        'name' => 'submit',
        'id' => 'submit',
        'value' => 'Submit',
        'class' => 'btn btn-success',
        'type' => 'submit',
    ];

        $session = session();
        $errors = $session->getFlashdata('errors');
    ?>

<h1>Tambah User</h1>

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
    <?= form_open('user/create') ?>
        <div class = "form_group mb-3">
            <?= form_label("Username", "username")?>
            <div class="input-group-append">
                <?= form_input($username)?>
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class = "form_group mb-3">
            <?= form_label("Password", "password")?>
            <div class="input-group-append">
                <?= form_password($password)?>
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class = "form_group mb-3">
            <?= form_label("Repeat Password", "repeatPassword")?>
            <div class="input-group-append">
                <?= form_password($repeatPassword)?>
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class = " col mt-3 text-right">
            <?= form_submit('submit', 'Submit',['class'=>'btn btn-primary']) ?>
        </div>
        </div>

    <?= form_close() ?>
<?= $this->endSection() ?>