<?= $this->extend('sidebar')?>
<?= $this->section('content')?>

<a href="<?= site_url('user/create') ?>" class="btn btn-primary">Tambah User</a>
<br>
</br>

<h2>Daftar User</h2>
<table class = "table">
    <thead>
        <th>No. </th>
        <th>Username</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach($users as $index => $user): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $user->username ?></td>
                <td>
                    <a href="<?= site_url('user/delete/'.$user->id) ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    

<?= $this->endSection() ?>