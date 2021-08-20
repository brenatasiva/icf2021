<h1><?= $data['event']['nama']; ?></h1>

<form action="<?= BASEURL; ?>/event/daftarEvent" method="post">
    <div>
        <div class="mb-3">
            <input type="text" class="form-control" id="nama_tim" name="nama_tim" placeholder="Nama Tim" required>
        </div>
    </div>
    <div>
        <div class="mb-3">
            <input type="text" maxlength="10" class="form-control" id="idPubg" name="idPubg" placeholder="ID PUBG perwakilan" required>
        </div>
    </div>
    <?php if ($data['event']['jenis'] == "Lomba Kelompok") {
        for ($i = 1; $i <= 3; $i++) { ?>
            <div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="nama<?= $i ?>" name="nama<?= $i ?>" placeholder="Nama Lengkap" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="email<?= $i ?>" name="email<?= $i ?>" placeholder="Alamat Email" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="nomor<?= $i ?>" name="nomor<?= $i ?>" placeholder="Nomor WA" required>
                </div>
                <div class="mb-3">
                    <input type="text" maxlength="10" class="form-control" id="nrp<?= $i ?>" name="nrp<?= $i ?>" placeholder="NRP">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="idPubg<?= $i ?>" name="idPubg<?= $i ?>" placeholder="ID PUBG" required>
                </div>
            </div>
    <?php }
    } ?>
    <div class="mb-3">
        <input type="text" class="form-control" id="linkDrive" name="linkDrive" placeholder="Link G-Drive" required>
    </div>
    <div class="d-grid gap-2 mt-4">
        <button type="input" class="btn btn-primary" name="eid" value="<?= $data['event']['id']; ?>">SUBMIT</button>
    </div>
</form>