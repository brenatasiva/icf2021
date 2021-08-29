<style>
    .faq-header-bg {
        background-image: url("<?= BASEURL; ?>/img/event/judul_event_bg.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .faq-title {
        margin: 0px !important;
    }

    .inner-container {
        padding: 100px 0px 150px 0px;
    }

    .nama-seminar {
        min-width: 140px;
    }

    .pembicara {
        width: 120px;
    }

    .tanggal-jam {
        min-width: 135px;
        width: 145px;
    }

    .zoom-id {
        min-width: 227px;
        width: 227px;
    }

    .link-text {
        width: 87%;
        display: inline-block !important;
    }

    .icon-copy {
        margin-bottom: 3px;
        vertical-align: unset !important;
    }

    .nama-cabang-lomba {
        width: 32%;
    }

    .tanggal-jam-lomba {
        width: 180px;
        min-width: 160px;
    }

    .status {
        width: 110px;
        min-width: 110px;
    }

    .bi-whatsapp {
        color: #009b8d !important;
    }

    .wa {
        text-align: center;
    }

    .wa-group {
        width: 200px;
        min-width: 180px;
        text-align: center;
    }

    .btn-sign-up {
        color: #009b8d !important;
        border-color: #009b8d !important;
        width: 70%;
        border-radius: 10px;
        font-weight: bold !important;
    }

    .btn-sign-up:hover {
        color: white !important;
        background-color: #009b8d !important;
        border-color: #009b8d !important;
    }

    .btn-disabled {
        width: 70%;
        border-radius: 10px;
    }

    .modal-dialog {
        max-width: 650px;
    }

    .modal-header {
        background-image: url("<?= BASEURL; ?>/img/event/avianto_tryo.png");
        background-position: 0px -50px;
        background-repeat: no-repeat;
        background-size: cover;
        height: 220px;
        flex-direction: column;
        align-items: start;
    }

    .modal-header .btn-close {
        padding: 0.5rem 0.5rem;
        margin: 0rem 0.5rem -0.5rem auto;
    }

    .modal-title {
        max-width: 300px;
        color: white;
    }

    .btn-close {
        color: white;
    }

    table {
        border: 1px solid #009b8d !important;
        margin-bottom: 0 !important;
        table-layout: fixed;
        width: 100%;
    }

    th {
        background: #009b8d !important;
        color: white;
        border-bottom: 1px solid #009b8d !important;
    }

    th,
    td {
        padding: 1.5rem 1rem !important;
    }

    /*    th:last-child, td:last-child {
        padding-right: 1rem !important;
    }*/
    tr,
    td {
        background: white !important;
        color: black !important;
    }

    @media (min-width: 1400px) {
        .nama-seminar {
            width: 400px;
        }

        .nama-seminar.daftar-nama-seminar {
            width: 400px;
        }
    }

    @media (max-width: 1400px) {
        .nama-seminar {
            width: 310px;
        }

        .nama-seminar.daftar-nama-seminar {
            width: 310px;
        }
    }

    @media (max-width: 1199px) {
        .nama-seminar {
            width: 220px;
        }

        .nama-seminar.daftar-nama-seminar {
            width: 220px;
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .nama-seminar {
            min-width: 140px;
        }

        .pembicara {
            width: 120px;
        }

        .tanggal-jam {
            min-width: 145px;
            width: 145px;
        }

        .zoom-id {
            min-width: 227px;
            width: 227px;
        }

        .link-zoom {
            min-width: 140px !important;
        }

        .nama-cabang-lomba {
            width: 28%;
        }
    }

    @media (max-width: 991px) {
        .nama-seminar {
            width: 140px;
        }

        .pembicara {
            width: 120px;
        }

        .tanggal-jam {
            min-width: 135px;
            width: 135px;
        }

        .zoom-id {
            min-width: 227px;
            width: 227px;
        }

        .link-zoom {
            width: 75px !important;
        }

        .link-text {
            display: none !important;
        }

        .icon-link {
            width: 100%;
            display: inline-block;
            text-align: center;
        }

        .nama-seminar.daftar-nama-seminar {
            width: 130px;
        }

        .btn-daftar-seminar {
            width: 205px;
        }

        .nama-cabang-lomba {
            width: 24%;
        }

        .tanggal-jam-lomba {
            width: 145px;
            min-width: 100px;
        }

        .status {
            width: 100px;
            min-width: 110px;
        }

        .wa-group {
            width: 120px;
            min-width: 120px;
        }
    }

    /*https://css-tricks.com/responsive-data-tables/*/
    @media only screen and (max-width: 767px),
    (min-device-width: 776px) and (max-device-width: 1250px) {

        /* Force table to not be like tables anymore */
        table,
        thead,
        tbody,
        th,
        td,
        tr {
            display: block;
        }

        /* Hide table headers (but not display: none;, for accessibility) */
        thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        table,
        thead,
        tbody {
            border: 0 !important;
        }

        tr {
            border: 2px solid #009b8d;
            margin-bottom: 10px;
        }

        td {
            border: none;
            border-bottom: 1px solid #eee;
            position: relative;
            padding-left: 50%;
        }

        tr,
        td {
            padding: 0 !important;
        }

        td:last-child {
            border-bottom: 0 !important;
        }

        td:before {
            display: inline-block;
            width: 40%;
            vertical-align: top;
            padding: 1.5rem 1rem;
            background: #009b8d;
            font-weight: bold;
            color: white;
        }

        td.riwayat-daftar-seminar:nth-of-type(1):before {
            content: "Nama Seminar";
        }

        td.riwayat-daftar-seminar:nth-of-type(2):before {
            content: "Pembicara";
        }

        td.riwayat-daftar-seminar:nth-of-type(3):before {
            content: "Tanggal & Jam";
        }

        td.riwayat-daftar-seminar:nth-of-type(4):before {
            content: "Zoom ID";
        }

        td.riwayat-daftar-seminar:nth-of-type(5):before {
            content: "Link Zoom";
        }

        td.riwayat-daftar-lomba:nth-of-type(1):before {
            content: "Nama Cabang Lomba";
        }

        td.riwayat-daftar-lomba:nth-of-type(2):before {
            content: "Nama Tim";
        }

        td.riwayat-daftar-lomba:nth-of-type(3):before {
            content: "Tanggal & Jam";
        }

        td.riwayat-daftar-lomba:nth-of-type(4):before {
            content: "Status";
        }

        td.riwayat-daftar-lomba:nth-of-type(5):before {
            content: "Whatsapp Group";
        }

        td.daftar-seminar:nth-of-type(1):before {
            content: "Nama Seminar";
        }

        td.daftar-seminar:nth-of-type(2):before {
            content: "Pembicara";
        }

        td.daftar-seminar:nth-of-type(3):before {
            content: "Tanggal & Jam";
        }

        td.daftar-seminar:nth-of-type(4):before {
            content: "Status";
        }

        td.daftar-seminar:nth-of-type(5):before {
            content: "Sign Up";
        }

        td.daftar-lomba:nth-of-type(1):before {
            content: "Nama Cabang Lomba";
        }

        td.daftar-lomba:nth-of-type(2):before {
            content: "Tanggal & Jam";
        }

        td.daftar-lomba:nth-of-type(3):before {
            content: "Sign Up";
        }

        td.daftar-pameran:nth-of-type(1):before {
            content: "Nama/Judul Karya";
        }

        td.daftar-pameran:nth-of-type(2):before {
            content: "Author";
        }

        td.daftar-pameran:nth-of-type(3):before {
            content: "Deskripsi";
        }

        .half-content {
            display: inline-block;
            width: 59%;
            padding: 0rem 1rem 0 0.5rem;
        }

        .link-text {
            width: 87%;
            display: inline-block !important;
        }

        .centered-content {
            display: grid;
            align-content: center;
            height: 72px;
        }

        .icon-copy {
            margin-bottom: 0 !important;
            margin-top: 4px;
        }

        .wa {
            text-align: unset;
        }

        .btn-disabled,
        .btn-sign-up {
            width: 100%;
        }
    }
</style>
<div class="faq-header-bg">
    <div class="container">
        <div class="row" style="padding-top: 60px; padding-bottom: 10px;">
            <div class="col d-flex justify-content-center align-items-end">
                <h1 class="faq-title text-light fw-bold"><?= $data['judulHalaman']; ?></h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div style="padding-bottom: 7rem;">
        <?php if ($data['judulHalaman'] != "Pameran" && isset($_SESSION['username']) && !empty($data['listRiwayat'])) { ?>
            <div class="pt-5">
                <h6><b>Riwayat Daftar</b></h6>
                <table class="table table-border">
                    <thead>
                        <?php
                        if ($data['judulHalaman'] == "Seminar")
                            echo "<th class='nama-seminar'>Nama Seminar</th>
                                    <th class='pembicara'>Pembicara</th>
                                    <th class='tanggal-jam'>Tanggal & Jam</th>
                                    <th class='zoom-id'>Zoom ID</th>
                                    <th class='link-zoom'>Link Zoom</th>";
                        else if ($data['judulHalaman'] == "Lomba")
                            echo "<th class='nama-cabang-lomba'>Nama Cabang Lomba</th>
                                    <th class='nama-tim'>Nama Tim</th>
                                    <th class='tanggal-jam-lomba'>Tanggal & Jam</th>
                                    <th class='status'>Status</th>
                                    <th class='wa-group'>Whatsapp Group</th>";
                        ?>
                    </thead>
                    <tbody>
                        <?php foreach ($data['listRiwayat'] as $key) :
                            $tglMulai = date("d/m/y H:i", strtotime($key['tanggal_mulai']));
                            $tglSelesai = date("d/m/y H:i", strtotime($key['tanggal_selesai']));
                            $paramEvent = strtolower(str_replace(' ', '-', $key['nama']));
                            $tgl = ($tglMulai == $tglSelesai) ? $tglMulai : $tglMulai . ' - ' . $tglSelesai;
                        ?>
                            <tr>
                                <!-- <td><? //= $key['status'] 
                                            ?></td> -->
                                <?php
                                if ($data['judulHalaman'] == "Seminar") {
                                    echo '<td class="riwayat-daftar-seminar">
                                                <div class="half-content">
                                                    <span class="centered-content">' . $key['nama'] . '</span>
                                                </div>
                                            </td>
                                            <td class="riwayat-daftar-seminar">
                                                <div class="half-content">
                                                    <span class="centered-content">' . $key['author'] . '</span>
                                                </div>
                                            </td>
                                            <td class="riwayat-daftar-seminar">
                                                <div class="half-content">
                                                    <span class="centered-content">' . $tgl . '</span>
                                                </div>
                                            </td>
                                            <td class="riwayat-daftar-seminar">
                                                <div class="half-content">
                                                    <span class="centered-content">
                                                        <div>
                                                            <span style="padding-right: 62px;">ID</span>: <span>935 7544 9633</span><br><span style="padding-right: 6px;">Password</span>: <span>10295</span>
                                                        </div>
                                                    </span>
                                                </div>                                    
                                            </td>
                                            <td class="riwayat-daftar-seminar">
                                                <div class="half-content">
                                                    <span class="centered-content" id="halo">' . ((!empty($key['link_zoom'])) ?
                                        '<span class="link-text text-truncate link-zoom-text" style="width: 80%;display: inline-block;">' . $key['link_zoom'] . '</span>
                                                            <span style="" class="">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-files icon-copy copy-text" style="cursor: pointer;" viewBox="0 0 16 16">
                                                                    <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
                                                                </svg>
                                                            </span>' : '-') . '
                                                    </span>
                                                </div>
                                            </td>';
                                } else if ($data['judulHalaman'] == "Lomba") {
                                    echo '<td class="riwayat-daftar-lomba">
                                                <div class="half-content">
                                                    <span class="centered-content">' . $key['nama'] . '</span>
                                                </div>
                                            </td>
                                            <td class="riwayat-daftar-lomba">
                                                <div class="half-content">
                                                    <span class="centered-content">' . $key['nama_tim'] . '</span>
                                                </div>
                                            </td>
                                            <td class="riwayat-daftar-lomba">
                                                <div class="half-content">
                                                    <span class="centered-content">' . $tglSelesai . '</span>
                                                </div>
                                            </td>
                                            <td class="riwayat-daftar-lomba">
                                                <div class="half-content">
                                                    <span class="centered-content">' . $key['status'] . '</span>
                                                </div>
                                            </td>
                                            <td class="riwayat-daftar-lomba wa">
                                                <div class="half-content">
                                                    <span class="centered-content"><a style="width: 18px;" href="' . $key['link_wa'] . '">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                                    </svg></a></span>
                                                </div>
                                            </td>
                                            <td class="riwayat-daftar-lomba">
                                                <div class="half-content">
                                                    <span class="centered-content"><a class="btn btn-altorange me-5" id="detailRiwayat" data-id="' . $key['id'] . '" data-bs-toggle="modal" data-bs-target="#modalEvent">Detail</a></span>
                                                </div>
                                            </td>';
                                }
                                ?>
                            </tr>

                            <!-- <div class="modal fade" id="modalToggle<?= $key['id']; ?>" aria-hidden="true" aria-labelledby="modalToggle<?= $key['id']; ?>Label" tabindex="-1">
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
                            </div> -->
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php } ?>

        <div class="pt-5">
            <h6><b>Daftar <?= $data['judulHalaman'] ?></b></h6>
            <table class="table table-border">
                <thead style="font-weight: normal;">
                    <?php
                    if ($data['judulHalaman'] == "Seminar")
                        echo "<th class='nama-seminar daftar-nama-seminar'>Nama Seminar</th>
                                <th class='pembicara'>Pembicara</th>
                                <th class='tanggal-jam'>Tanggal & Jam</th>
                                <th style='width: 80px;'>Status</th>
                                <th class='btn-daftar-seminar'></th>";
                    else if ($data['judulHalaman'] == "Lomba")
                        echo "<th class='nama-cabang-lomba'>Nama Cabang Lomba</th>
                                <th>Tanggal & Jam</th>
                                <th>Jenis</th>
                                <th></th>";
                    else if ($data['judulHalaman'] == "Pameran")
                        echo "<th style='width: 30%;'>Nama/Judul Karya</th>
                                <th style='width: 20%;'>Author</th>
                                <th>Deskripsi</th>";
                    ?>
                </thead>
                <tbody>
                    <?php foreach ($data['listAllEvent'] as $key) :
                        $tglMulai = date("d/m/y H:i", strtotime($key['tanggal_mulai']));
                        $tglSelesai = date("d/m/y H:i", strtotime($key['tanggal_selesai']));
                        $paramEvent = strtolower(str_replace(' ', '-', $key['nama']));
                    ?>
                        <tr>
                            <?php
                            if ($data['judulHalaman'] == "Seminar") {
                                $status = (date("d/m/y H:i", strtotime('now')) > $tglSelesai) ? "Closed" : "Open";
                            ?>
                                <td class="daftar-seminar">
                                    <div class="half-content">
                                        <span class="centered-content"> <?= $key['nama'] ?> </span>
                                    </div>
                                </td>
                                <td class="daftar-seminar">
                                    <div class="half-content">
                                        <span class="centered-content"> <?= $key["author"] ?> </span>
                                    </div>
                                </td>
                                <td class="daftar-seminar">
                                    <div class="half-content">
                                        <span class="centered-content"> <?= (($tglMulai == $tglSelesai) ? $tglMulai : $tglMulai . ' - ' . $tglSelesai) ?> </span>
                                    </div>
                                </td>
                                <td class="daftar-seminar">
                                    <div class="half-content">
                                        <span class="centered-content"> <?= $status ?> </span>
                                    </div>
                                </td>

                                <td class="daftar-seminar">
                                    <div class="half-content" style="text-align: center !important;">
                                        <span class="centered-content"><a class="btn <?php echo ($status == "Open") ? "btn-outline-success btn-sign-up" : "btn-outline-secondary btn-disabled disabled"; ?>" data-bs-toggle="modal" href="<?php echo ($status == "Open") ? "#modalToggle" : ""; ?> <?= $key['id'] ?> " role="button">Sign Up</a></span>
                                    </div>
                                </td>
                            <?php } else if ($data['judulHalaman'] == "Lomba") {
                                echo '<td class="daftar-lomba">
                                            <div class="half-content">
                                                <span class="centered-content">' . $key['nama'] . '</span>
                                            </div>
                                        </td>
                                        <td class="daftar-lomba">
                                            <div class="half-content">
                                                <span class="centered-content">' . (($tglMulai == $tglSelesai) ? $tglMulai : $tglMulai . ' - ' . $tglSelesai) . '</span>
                                            </div>
                                        </td>
                                        <td class="daftar-lomba">
                                            <div class="half-content">
                                                <span class="centered-content">' . $key['jenis'] . '</span>
                                            </div>
                                        </td>
                                        <td class="daftar-lomba">
                                            <div class="half-content" style="text-align: center !important;">
                                                <span class="centered-content"><a class="btn btn-outline-success btn-sign-up" data-bs-toggle="modal" href="#modalToggle' . $key['id'] . '" role="button">Sign Up</a></span>
                                            </div>
                                        </td>';
                            } else if ($data['judulHalaman'] == "Pameran") {
                                echo '<td class="daftar-pameran">
                                            <div class="half-content">
                                                <span class="centered-content">' . $key['nama'] . '</span>
                                            </div>
                                        </td>
                                        <td class="daftar-pameran"">
                                            <div class="half-content">
                                                <span class="centered-content">' . $key['author'] . '</span>
                                            </div>
                                        </td>
                                        <td class="daftar-pameran">
                                            <div class="half-content">
                                                <span class="centered-content">' . $key['deskripsi'] . '</span>
                                            </div>
                                        </td>';
                            }
                            ?>
                        </tr>

                        <div class="modal fade" id="modalToggle<?= $key['id']; ?>" aria-hidden="true" aria-labelledby="modalToggle<?= $key['id']; ?>Label" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <h3 class="modal-title" id="modalToggle<?= $key['id']; ?>Label"><?= $key['nama']; ?></h3>
                                    </div>
                                    <div class="modal-body">
                                        <?= $key['deskripsi']; ?>
                                    </div>
                                    <div class="modal-footer">
                                        <?php if ($key['jenis'] == 'Lomba Kelompok') { ?>
                                            <form action="<?= BASEURL; ?>/event/formLomba" method="post">
                                                <button type="submit" class="btn btn-primary" name="eid" value="<?= $key['id']; ?>">Register</button>
                                            </form>
                                        <?php } else if ($key['jenis'] == 'Lomba Individu') { ?>
                                            <form action="<?= BASEURL; ?>/event/daftarEvent" method="post">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Link Drive" aria-describedby="button-addon2" name="link" required>
                                                    <button type="submit" class="btn btn-primary" id="button-addon2" name="eid" value="<?= $key['id']; ?>">Register</button>
                                                </div>

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
        </div>
    </div>
</div>

<!-- MODAL RIWAYAT -->
<div class="modal fade" id="modalEvent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class=" modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tgl_mulai" class="col-sm-3 col-form-label">Tanggal Mulai</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tgl_selesai" class="col-sm-3 col-form-label">Tanggal Selesai</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="author" class="col-sm-3 col-form-label">Author</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="author" name="author">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="syarat" class="col-sm-3 col-form-label">Syarat Ketentuan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="syarat" name="syarat">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="linkwa" class="col-sm-3 col-form-label">Link WA</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="linkwa" name="linkwa">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="linkzoom" class="col-sm-3 col-form-label">Link Zoom</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="linkzoom" name="linkzoom">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-3 col-form-label">Jenis Event</label>
                    <div class="col-sm-9">
                        <select class="form-select" aria-label="Default select example" id="selectJenis" name="jenis_id">
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL RIWAYAT -->
<script type="text/javascript">
    $('body').on('click', '.copy-text', function() {
        var firstChild = $(this).parent().parent().children()[0];
        var copiedValue = firstChild.innerHTML;
        navigator.clipboard.writeText(copiedValue);
        alert("Link copied!");
    });

    $('body').on('click', '#detailRiwayat', function() {
        $('#modalTitle').html('Detail Riwayat');

        const idevent = $(this).data('id');
        $('input[type="hidden"]').remove();
        $('form').append('<input type="hidden" name="eid" value="' + idevent + '">')
        $.ajax({
            method: 'post',
            url: '<?= BASEURL; ?>/user/getDetilRiwayat',
            data: {
                eid: idevent
            },
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
            }
        })
    })
</script>