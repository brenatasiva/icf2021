<form class="mt-5" action="<?= BASEURL; ?>/user/editProfile" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" placeholder="Nama Lengkap" disabled value="<?= $data['User'][0]['nama']; ?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email" value="<?= $data['User'][0]['email']; ?>">
    </div>
    <div class="mb-3">
        <label for="nomor" class="form-label">Nomor WA</label>
        <input type="text" class="form-control" id="nomor" name="no_hp" placeholder="Nomor WA" value="<?= $data['User'][0]['no_hp']; ?>">
    </div>
    <div class="mb-3">
        <label for="nrp" class="form-label">NRP</label>
        <input type="text" maxlength="10" class="form-control" id="nrp" name="nrp" placeholder="Kosongkan jika bukan mahasiswa ubaya" value="<?= $data['User'][0]['nrp']; ?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>