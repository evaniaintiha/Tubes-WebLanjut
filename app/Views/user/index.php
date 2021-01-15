<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
<h2>Daftar User</h2>
<table class = "table">
    <thead>
        <th>No. </th>
        <th>ID</th>
        <th>Username</th>
    </thead>
    <tbody>
        <?php foreach($users as $index => $user): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $user->id ?></td>
                <td><?= $user->username ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    

<?= $this->endSection() ?>