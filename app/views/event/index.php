<h1 class="mt-4">Events</h1>

<table class="table table-border table-dark">
    <thead>
        <td>Nama</td>
        <td>Tanggal</td>
        <td>Jenis</td>
        <td>Aksi</td>
    </thead>
    <tbody>
        <?php foreach ($data['listAllEvent'] as $key) :
            $tglMulai = date("d M Y", strtotime($key['tanggal_mulai']));
            $tglSelesai = date("d M Y", strtotime($key['tanggal_selesai']));
            $paramEvent = strtolower(str_replace(' ', '-', $key['nama']));
        ?>
            <tr>
                <td><?= $key['nama']; ?></td>
                <td><?php echo ($tglMulai == $tglSelesai) ? $tglMulai : $tglMulai . ' - ' . $tglSelesai ?></td>
                <td><?= $key['jenis']; ?></td>
                <td><a href="<?= BASEURL; ?>/event/detil/<?= $paramEvent ?>">Lihat Detil</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>