<?php
if ($_SESSION['username'] != 'admin') {
    header('location: ' . BASEURL);
}
?>
<div class="container">
    <h1 class="mt-4">Daftar Peserta Keseluruhan</h1>

    <table class="table table-border table-dark">
        <thead>
            <td>Username</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Nomor Hp</td>
        </thead>
        <tbody>
            <?php foreach ($data['listAllUser'] as $key) : ?>
                <tr>
                    <td><?= $key['username']; ?></td>
                    <td><?= $key['nama']; ?></td>
                    <td><?= $key['email']; ?></td>
                    <td><?= $key['no_hp']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>