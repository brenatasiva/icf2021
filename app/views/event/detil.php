<h1><?= $data['listEvent']['nama'] ?></h1>

<table class="table table-border table-dark">
    <thead>
        <td>Tanggal</td>
        <td>Deskripsi</td>
        <td>Jenis</td>
        <td>Aksi</td>
    </thead>
    <tbody>
        <?php
        $tglMulai = date("d M Y", strtotime($data['listEvent']['tanggal_mulai']));
        $tglSelesai = date("d M Y", strtotime($data['listEvent']['tanggal_selesai']));
        ?>
        <form action="<?= BASEURL; ?>/event/formDaftar" method="post">
            <td><?php echo ($tglMulai == $tglSelesai) ? $tglMulai : $tglMulai . ' - ' . $tglSelesai ?></td>
            <td><?= $data['listEvent']['deskripsi']; ?></td>
            <td><?= $data['listEvent']['jenis']; ?></td>
            <td><button type="submit" name="id" value="<?= $data['listEvent']['id']; ?>">Daftar</button></td>
        </form>
    </tbody>
</table>