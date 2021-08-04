<form class="mt-5" action="<?= BASEURL; ?>/register/registUser" method="post">
    <?= Flasher::flash(); ?>
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email" required>
    </div>
    <div class="mb-3">
        <label for="nomor" class="form-label">Nomor WA</label>
        <input type="text" class="form-control" id="nomor" name="nomor" placeholder="Nomor WA" required>
    </div>
    <div class="mb-3">
        <label for="nrp" class="form-label">NRP</label>
        <input type="text" maxlength="10" class="form-control" id="nrp" name="nrp" placeholder="Kosongkan jika bukan mahasiswa ubaya">
    </div>
    <div class="d-grid gap-2 mt-4">
        <button type="input" class="btn btn-primary" name="btnsubmit" type="button">Daftar Sekarang!</button>
    </div>
</form>