<h1><?= $data['event']['nama']; ?></h1>

<form action="">
    <div>
        <div class="mb-3">
            <input type="text" maxlength="10" class="form-control" id="idPubg" name="idPubg" placeholder="ID PUBG perwakilan" required>
        </div>
    </div>
    <?php if ($data['event']['jenis'] == "Lomba Kelompok") {
        for ($i = 0; $i < 3; $i++) { ?>
            <div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="nomor" name="nomor" placeholder="Nomor WA" required>
                </div>
                <div class="mb-3">
                    <input type="text" maxlength="10" class="form-control" id="nrp" name="nrp" placeholder="NRP">
                </div>
                <div class="mb-3">
                    <input type="text" maxlength="10" class="form-control" id="idPubg" name="idPubg" placeholder="ID PUBG" required>
                </div>
            </div>
        <?php }
    } else { ?>

    <?php } ?>
    <div class="mb-3">
        <input type="text" maxlength="10" class="form-control" id="linkDrive" name="linkDrive" placeholder="Link G-Drive" required>
    </div>
    <div class="d-grid gap-2 mt-4">
        <button type="input" class="btn btn-primary" name="btnsubmit" type="button">SUBMIT</button>
    </div>
</form>