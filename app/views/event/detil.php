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
        <td><?php echo ($tglMulai == $tglSelesai) ? $tglMulai : $tglMulai . ' - ' . $tglSelesai ?></td>
        <td><?= $data['listEvent']['deskripsi']; ?></td>
        <td><?= $data['listEvent']['jenis']; ?></td>
        <td><a href="<?= BASEURL; ?>/event/formDaftar/<?= $data['paramEvent'] ?>">Daftar</a></td>
    </tbody>
</table>