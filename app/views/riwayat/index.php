    <h1 class="mt-4">Riwayat</h1>
    <thead>
        <td>Nama</td>
        <td>Tanggal</td>
        <td>Deskripsi</td>
        <td>Jenis</td>
        <td>Aksi</td>
    </thead>
    <tbody>
        <?php foreach ($data['listAllEvent'] as $key) :
            $tglMulai = date("d M Y", strtotime($key['tanggal_mulai']));
            $tglSelesai = date("d M Y", strtotime($key['tanggal_selesai']));
        ?>
            <form action="<?= BASEURL; ?>/event/detil" method="post">
                <tr>
                    <td><?= $key['nama']; ?></td>
                    <td><?php echo ($tglMulai == $tglSelesai) ? $tglMulai : $tglMulai . ' - ' . $tglSelesai ?></td>
                    <td><?= $key['deskripsi']; ?></td>
                    <td><?= $key['jenis']; ?></td>
                    <td><button type="submit" name="id" value="<?= $key['id']; ?>">Hapus</button></td>
                </tr>
            </form>
        <?php endforeach; ?>
    </tbody>