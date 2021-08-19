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
                <!-- <td><a href="<?= BASEURL; ?>/event/detil/<?= $paramEvent ?>">Lihat Detil</a></td> -->
                <td><a data-bs-toggle="modal" href="#modalToggle<?= $key['id']; ?>" role="button">Lihat Detil</a></td>
            </tr>

            <div class="modal fade" id="modalToggle<?= $key['id']; ?>" aria-hidden="true" aria-labelledby="modalToggle<?= $key['id']; ?>Label" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalToggle<?= $key['id']; ?>Label"><?= $key['nama']; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?= $key['deskripsi']; ?>
                        </div>
                        <div class="modal-footer">
                            <?php if ($key['jenis'] == 'Lomba Kelompok') { ?>
                                <form action="<?= BASEURL; ?>/event/formLomba" method="post">
                                    <button type="submit" class="btn btn-primary" name="eid" value="<?= $key['id']; ?>">Register</button>
                                </form>
                            <?php } else { ?>
                                <form action="<?= BASEURL; ?>/event/daftarEvent" method="post">
                                    <input type="hidden" name="eid" value="<?= $key['id']; ?>">
                                    <input type="submit" class="btn btn-primary" value="Register">
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <?php if ($key['jenis'] == 'Lomba Kelompok') { ?>
                <div class="modal fade" id="ModalToggle2" aria-hidden="true" aria-labelledby="ModalToggleLabel2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalToggleLabel2"><?= $key['nama']; ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="<?= BASEURL; ?>/event/daftarEvent" method="post">
                                <div class="modal-body">
                                    <input type="hidden" name="eid" value="<?= $key['id']; ?>">
                                    <input type="text" name="nama_tim" placeholder="Nama tim" required><br>
                                    <label for="">Bukti Transfer </label><input type="file" name="bukti_transfer" required>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-primary" value="Register">
                                </div>
                            </form>
                            <button class="btn btn-primary" data-bs-target="#modalToggle<?= $key['id']; ?>" data-bs-toggle="modal" data-bs-dismiss="modal">Back</button>
                        </div>
                    </div>
                </div>
            <?php } ?> -->
        <?php endforeach; ?>
    </tbody>
</table>