<style type="text/css">
    input[type=text],
    input[type=email] {
        background: transparent !important;
        border: 1px solid black;
    }

    .inner-form-lomba {
        display: flex;
        width: 100%;
        height: 100%;
        flex-direction: column;
        padding: 100px 0 150px 0;
    }

    .container-title-lomba {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
    }

    .title-lomba {
        width: 80%;
        text-align: center;
        font-weight: lighter;
    }

    .container-syarat-ketentuan {
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        padding: 50px 0;
    }

    .syarat-ketentuan {
        max-height: 350px;
        font-weight: lighter;
        overflow-y: scroll;
        -ms-overflow-style: none;
        scrollbar-width: none;
        text-align: justify;
    }

    .syarat::-webkit-scrollbar {
        display: none;
    }

    .container-input-lomba {
        width: 90%;
        margin-left: auto;
        margin-right: auto;
    }

    .form-lomba-header {
        margin-left: auto;
        margin-right: auto;
        max-width: 440px;
        padding: 50px 0;
    }

    .form-lomba-body {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        width: 90%;
        margin-left: auto;
        margin-right: auto;
    }

    .form-lomba-body .card,
    .form-lomba-header {
        width: 270px;
    }

    .form-lomba-body .title,
    .form-lomba-header .title {
        padding-bottom: 10px;
        text-align: center;
    }

    .form-lomba-body .card {
        background: transparent;
        border: 0;
        padding-bottom: 50px;
    }

    .form-lomba-footer {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 90%;
        margin-right: auto;
        margin-left: auto;
    }

    .form-lomba-footer .content {
        max-width: 600px;
        min-width: 300px;
        width: 100%;
    }

    .container-link-drive {
        position: relative;
    }

    .text-link-drive {
        position: absolute;
        left: -100px;
        top: 8px;
        font-weight: lighter;
    }

    .btn-lomba-submit {
        color: #009b8d !important;
        background-color: transparent !important;
        width: 200px;
        padding: 0.5rem 0.75rem;
        border-color: #009b8d !important;
        border-radius: 6px;
        font-weight: bold;
    }

    .btn-lomba-submit:hover {
        color: white !important;
        background-color: #009b8d !important;
    }

    @media (max-width: 1199px) {
        .container-input-lomba {
            width: 95%;
        }

        .form-lomba-body .card,
        .form-lomba-header {
            width: 230px;
        }
    }

    @media (max-width: 992px) {
        .container.form-lomba {
            max-width: 800px;
        }

        .container-input-lomba {
            width: 100%;
        }

        .form-lomba-body {
            width: 100%;
        }

        .form-lomba-footer .content {
            max-width: 500px;
            width: 100%;
        }
    }

    @media (max-width: 890px) {
        .container.form-lomba {
            max-width: 700px;
        }

        .form-lomba-header,
        .form-lomba-header {
            width: 90%;
            margin-right: auto;
            margin-left: auto;
        }

        .form-lomba-body {
            flex-direction: column;
            align-items: center;
            width: 90%;
            margin-right: auto;
            margin-left: auto;
        }

        .form-lomba-body .card,
        .form-lomba-footer .content {
            max-width: 440px;
            width: 100%;
        }

        .container-link-drive,
        .text-link-drive {
            position: unset;
        }

        .container-link-drive {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .text-link-drive {
            padding-bottom: 10px;
        }
    }
</style>
<div style="background: #eeece7;">
    <div class="container form-lomba">
        <div class="inner-form-lomba">
            <div class="container-title-lomba">
                <h1 class="title-lomba circular-icf"><?= $data['event']['nama']; ?> Registration<br>Syarat & Ketentuan</h1>
            </div>
            <div class="container-syarat-ketentuan">
                <div class="syarat-ketentuan ps-2 pe-2" onmouseover="scrolling(this)">
                    <?= $data['event']['syarat_ketentuan']; ?>
                </div>
            </div>
            <div class="container-input-lomba">
                <form action="<?= BASEURL; ?>/event/daftarEvent" method="post">
                    <div class="form-lomba-header">
                        <div class="title">Perwakilan/Ketua</div>
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
                    </div>
                    <div class="form-lomba-body">
                        <?php if ($data['event']['jenis'] == "Lomba Kelompok") {
                            for ($i = 1; $i <= 3; $i++) { ?>
                                <div class="card">
                                    <div class="first-item">

                                    </div>
                                    <div class="second-item">
                                        <div class="title">Anggota <?php echo $i; ?></div>
                                        <div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="nama<?= $i; ?>" name="nama<?= $i; ?>" placeholder="Nama Lengkap" required>
                                            </div>
                                            <div class="mb-3">
                                                <input type="email" class="form-control" id="email<?= $i; ?>" name="email<?= $i; ?>" placeholder="Alamat Email" required>
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="nomor<?= $i; ?>" name="nomor<?= $i; ?>" placeholder="Nomor WA" required>
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" minlength="9" maxlength="9" class="form-control" id="nrp<?= $i; ?>" name="nrp<?= $i; ?>" placeholder="NRP">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="idPubg<?= $i; ?>" name="idPubg<?= $i; ?>" placeholder="ID PUBG" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                    </div>
                    <div class="form-lomba-footer">
                        <div class="content">
                            <div class="container-link-drive mb-4">
                                <span class="text-link-drive">Drive Link</span>
                                <input type="text" class="form-control input-link-drive" id="linkDrive" name="linkDrive" required>
                            </div>
                            <div style="display: flex; justify-content: center;">
                                <input type="hidden" name="jns" value="lomba">
                                <button type="input" class="btn btn-primary btn-lomba-submit" name="eid" value="<?= $data['event']['id']; ?>">SUBMIT</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function scrolling(obj) { obj.setActive(); }
</script>