<style type="text/css">
    .user-bg {
        background-image: url("<?= BASEURL; ?>/img/profile/profile_bg.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        padding: 150px 0px 180px 0px;
    }

    .user-input {
        background: #2b313d;
        color: white;
        border-radius: 10px !important;
    }

    .user-input:focus {
        background: #2b313d;
        color: white;
    }

    .form-user-input {
        min-width: 300px !important;
        max-width: 450px !important;
    }

    .form-control:disabled {
        background-color: #62666a;
        border-color: #62666a;
    }

    .btn-user-save {
        width: 100%;
    }
</style>

<div class="user-bg">
    <div class="container">
        <div class="d-flex flex-column justify-content-center">
            <div class="d-flex justify-content-center">
                <span class="w-auto d-flex justify-content-center circular-icf text-light pb-5" style="font-size: 50px; font-weight: bold;">PROFILE</span>
            </div>
            <div class="d-flex justify-content-center">
                <form class="w-50 form-user-input text-light" action="<?= BASEURL; ?>/user/editProfile" method="post">
                    <div class="pb-4">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control user-input" placeholder="Nama Lengkap" disabled value="<?= $data['User'][0]['nama']; ?>">
                    </div>
                    <div class="pb-4">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control user-input" id="email" name="email" placeholder="Alamat Email" value="<?= $data['User'][0]['email']; ?>">
                    </div>
                    <div class="pb-4">
                        <label for="nomor" class="form-label">Nomor WA</label>
                        <input type="text" class="form-control user-input" id="nomor" name="no_hp" placeholder="Nomor WA" value="<?= $data['User'][0]['no_hp']; ?>">
                    </div>
                    <div class="pb-5">
                        <label for="nrp" class="form-label">NRP</label>
                        <input type="text" maxlength="10" class="form-control user-input" id="nrp" name="nrp" placeholder="Kosongkan jika bukan mahasiswa ubaya" value="<?= $data['User'][0]['nrp']; ?>">
                    </div>
                    <div class="pb-4">
                        <button type="submit" class="btn btn-primary btn-user-save">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>