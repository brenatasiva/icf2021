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
        ?>
            <tr>
                <td><?= $key['nama']; ?></td>
                <td><?php echo ($tglMulai == $tglSelesai) ? $tglMulai : $tglMulai . ' - ' . $tglSelesai ?></td>
                <td><?= $key['jenis']; ?></td>
                <td><a href="">Edit</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>