<form class="mt-5" action="<?= BASEURL; ?>/user/registUser" method="post">
    <?= Flasher::flash(); ?>
    <div class="mb-3">
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
    </div>
    <div class="mb-3">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
    <div class="mb-3">
        <input type="password" class="form-control" id="password" name="confirmPassword" placeholder="Confirm Password" required>
    </div>
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
        
    </div>
    <div class="mb-3">
        <input type="text" maxlength="10" class="form-control" id="nrp" name="nrp" placeholder="NRP">
    </div>
    <div class="d-grid gap-2 mt-4">
        <button type="input" class="btn btn-primary" name="btnsubmit" type="button">Daftar Sekarang!</button>
    </div>
</form>