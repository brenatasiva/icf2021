<style>
    .event-header-bg {
        background-image: url("<?= BASECSS; ?>/img/event/judul_event_BG.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .event-title {
        margin: 0px !important;
        font-size: 3.5rem;
    }

    .tanggal-jam {
        min-width: 135px;
    }

    .zoom-id {
        min-width: 227px;
        width: 227px;
    }

    .container-link-zoom {
        max-width: 250px;
    }

    .link-text {
        width: 87%;
        display: inline-block !important;
    }

    .icon-copy {
        margin-bottom: 3px;
        vertical-align: unset !important;
    }

    .bi-whatsapp {
        color: #009b8d !important;
    }

    .wa {
        text-align: center;
    }

    .wa-group {
        text-align: center;
    }

    .details {
        width: 40%;
    }

    .badge-icf {
        display: inline;
        padding: 0.35em 0.65em;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 0.25rem;
    }

    .btn-details {
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        color: #0d6efd;
    }

    .btn-sign-up {
        color: #009b8d !important;
        border-color: #009b8d !important;
        width: 70%;
        border-radius: 10px;
        font-weight: bold !important;
    }

    .btn-details:hover {
        color: #0a58ca;
    }

    .btn-sign-up.join-wa:hover .bi-whatsapp {
        fill: white !important;
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

    .modal-dialog.seminar {
        max-width: 700px;
    }

    .modal-dialog.lomba {
        max-width: 1000px;
    }

    .modal-content.lomba {
        background: #eeece7;
    }

    .modal-header.seminar {
        background-image: url("<?= BASECSS; ?>/img/event/avianto_tryo.png");
        background-position: 0px -72px;
        background-repeat: no-repeat;
        background-size: cover;
        height: 220px;
        position: relative;
    }

    .modal-header.seminar .modal-header-layer {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: green;
        opacity: 0.1;
    }

    .modal-header.seminar .modal-header-content {
        position: absolute;
        top: 0;
        left: 0;
        justify-content: space-between;
        flex-direction: column;
        align-items: start;
        width: 100%;
        height: 100%;
        display: flex;
        padding: 2rem 2rem 0.5rem 2rem;
    }

    .modal-header-content .btn-close {
        padding: 0.5rem 0.5rem;
        margin: -1.2rem -1rem -1rem auto;
    }

    .modal-title {
        max-width: 300px;
        color: white;
        line-height: 0.9;
        font-size: 40px;
        text-shadow: 0px 0px 30px black;
    }

    .modal-body.seminar {
        display: flex;
        flex-direction: row;
        padding: 2rem 2rem 3rem 2rem;
    }

    .modal-body.seminar .modal-body-content {
        width: 50%;
    }

    .modal-body.seminar .modal-body-desc {
        padding-right: 2rem;
        font-weight: lighter;
    }

    .modal-body.seminar .modal-body-info {
        flex-direction: column;
        display: flex;
        padding-left: 2rem;
        font-weight: lighter;
    }

    .modal-info {
        text-align: right;
        padding-right: 10px;
    }

    .btn-modal-info {
        margin-top: 30px;
        border-radius: 0;
        width: 100%;
        padding: 0.375rem 0.75rem;
    }

    .modal-header.lomba-individu {
        border: 0;
    }

    .modal-body.lomba-individu .modal-body-content {
        display: none;
    }

    .modal-body.seminar .lomba {
        display: none;
    }

    .modal-body.lomba-individu .lomba {
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100%;
    }

    .modal-header-content.lomba-individu {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .modal-header-content.lomba-individu .modal-title {
        text-align: center;
        text-shadow: unset;
        line-height: 2.5rem;
        color: black;
        font-family: "Circular Icf";
        font-size: 2rem;
        font-weight: lighter;
        width: 80%;
        max-width: unset;
    }

    .modal-header-content.lomba-individu .btn-close {
        margin: 0;
        position: absolute;
        right: 0;
        top: 0;
    }

    .modal-header-content.lomba-individu .btn-close .bi-x-lg {
        fill: black;
    }

    .lomba-content {
        max-width: 70%;
    }

    .syarat {
        height: 250px;
        font-weight: lighter;
        overflow-y: scroll;
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .syarat::-webkit-scrollbar {
        display: none;
    }

    .modal-submit {
        padding-top: 10%;
    }

    .btn-close {
        color: white;
        width: unset;
        height: unset;
        background: transparent;
        opacity: unset;
        line-height: unset;
    }

    .btn-close:hover {
        box-shadow: unset;
    }

    .modal-dialog-scrollable .modal-inner {
        overflow-y: auto;
    }

    .lomba-content .input-group {
        justify-content: space-between;
        flex-direction: column;
        align-items: center;
    }

    .container-link-drive {
        text-align: center;
        position: relative;
        justify-content: center;
        display: flex;
        width: 100%;
    }

    .text-link-drive {
        position: absolute;
        left: 6%;
        top: 8px;
        font-weight: lighter;
    }

    .input-link-drive {
        flex: unset !important;
        width: 60%;
        min-width: unset !important;
    }

    .lomba-content .btn-sign-up {
        width: 150px;
    }

    table {
        border: 1px solid #009b8d !important;
        margin-bottom: 0 !important;
        width: 100%;
    }

    th {
        background: #009b8d !important;
        color: white;
        border-bottom: 1px solid #009b8d !important;
    }

    td {
        display: table-cell;
        vertical-align: middle;
    }

    th,
    td {
        padding: 1.5rem 1rem !important;
    }

    tr,
    td {
        background: white !important;
        color: black !important;
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .zoom-id {
            min-width: 227px;
            width: 227px;
        }

        .link-zoom {
            min-width: 140px !important;
        }
    }

    @media (max-width: 991px) {
        .text-link-drive {
            display: none;
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
            content: "Tanggal & Jam";
        }

        td.riwayat-daftar-lomba:nth-of-type(3):before {
            content: "Status";
        }

        td.riwayat-daftar-lomba:nth-of-type(4):before {
            content: "Whatsapp Group";
        }

        td.riwayat-daftar-lomba:nth-of-type(5):before {
            content: "\00a0 ";
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
            content: "\00a0 ";
        }

        td.daftar-lomba:nth-of-type(1):before {
            content: "Nama Cabang Lomba";
        }

        td.daftar-lomba:nth-of-type(2):before {
            content: "Tanggal & Jam";
        }

        td.daftar-lomba:nth-of-type(3):before {
            content: "Jenis";
        }

        td.daftar-lomba:nth-of-type(4):before {
            content: "\00a0 ";
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

        .container-link-zoom {
            max-width: unset;
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
<?php
$judul = explode(" - ", $data['judulHalaman']);
?>
<div class="event-header-bg">
    <div class="container">
        <div class="row" style="padding-top: 60px;">
            <div class="col d-flex justify-content-center align-items-end">
                <h1 class="event-title text-light fw-bold circular-icf"><?= $judul[0]; ?></h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- RIWAYAT PENDAFTARAN -->
    <div style="padding-bottom: 7rem;">
        <?php if ($data['judulHalaman'] != "Pameran - ICF 2021" && isset($_SESSION['username']) && !empty($data['listRiwayat'])) { ?>
            <div class="pt-5">
                <h6><b>Riwayat Daftar</b></h6>
                <table class="table table-border">
                    <thead>
                        <?php
                        if ($data['judulHalaman'] == "Seminar - ICF 2021")
                            echo "<th class='nama-seminar'>Nama Seminar</th>
                                    <th class='pembicara'>Pembicara</th>
                                    <th class='tanggal-jam'>Tanggal & Jam</th>
                                    <th class='zoom-id'>Zoom ID</th>
                                    <th class='link-zoom'>Link Zoom</th>";
                        else if ($data['judulHalaman'] == "Lomba - ICF 2021")
                            echo "<th class='nama-cabang-lomba'>Nama Cabang Lomba</th>
                                    <th class='tanggal-jam-lomba'>Tanggal & Jam</th>
                                    <th class='status'>Status</th>
                                    <th class='wa-group'>Whatsapp Group</th>
                                    <th></th> ";
                        ?>
                    </thead>
                    <tbody>
                        <?php foreach ($data['listRiwayat'] as $key) :
                            $tglMulai = date("d M Y h:i", strtotime($key['tanggal_mulai']));
                            $tglSelesai = date("d M Y h:i", strtotime($key['tanggal_selesai']));
                            $paramEvent = strtolower(str_replace(' ', '-', $key['nama']));
                            $tgl = ($tglMulai == $tglSelesai) ? $tglMulai : $tglMulai . ' - ' . $tglSelesai;
                        ?>
                            <tr>
                                <?php
                                if ($data['judulHalaman'] == "Seminar - ICF 2021") {
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
                                                        <div>' . (($key['id_zoom'] != "" && $key['pass_zoom'] != "") ? ('<span style="padding-right: 62px;">ID</span>: <span>' . $key['id_zoom'] . '</span><br><span style="padding-right: 6px;">Password</span>: <span>' . $key['pass_zoom'] . '</span>') : '-') . '</div>
                                                    </span>
                                                </div>                                    
                                            </td>
                                            <td class="riwayat-daftar-seminar container-link-zoom">
                                                <div class="half-content">
                                                    <span class="centered-content">' . ((!empty($key['link_zoom'])) ? '<span class="link-text text-truncate link-zoom-text" style="width: 90%;display: inline-block;">' . $key['link_zoom'] . '</span>
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-files icon-copy copy-text" style="cursor: pointer;" viewBox="0 0 16 16">
                                                                <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
                                                            </svg>
                                                        </span>' : '-') . '
                                                    </span>
                                                </div>
                                            </td>';
                                } else if ($data['judulHalaman'] == "Lomba - ICF 2021") {
                                    echo '<td class="riwayat-daftar-lomba">
                                                <div class="half-content">
                                                    <span class="centered-content">' . $key['nama'] . '</span>
                                                </div>
                                            </td>
                                            <td class="riwayat-daftar-lomba">
                                                <div class="half-content">
                                                    <span class="centered-content">' . $tglSelesai . '</span>
                                                </div>
                                            </td>
                                            <td class="riwayat-daftar-lomba">
                                                <div class="half-content">
                                                    <span class="centered-content"><span class="badge-icf bg-danger">' . $key['status'] . '</span></span>
                                                </div>
                                            </td>
                                            <td class="riwayat-daftar-lomba wa">
                                                <div class="half-content">
                                                    <span class="centered-content"><a class="btn btn-sign-up join-wa"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-whatsapp" style="margin:0 5px 5px 0;" viewBox="0 0 16 16">
                                                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                                    </svg>Join</a></span>
                                                </div>
                                            </td>
                                            <td class="riwayat-daftar-lomba">
                                                <div class="half-content">
                                                    <span class="centered-content"><a class="btn-details" id="detailRiwayat" data-id="' . $key['event_id'] . '" data-jenis="' . $key['jenis'] . '" data-bs-toggle="modal" data-bs-target="#modalEvent">Detail</a></span>
                                                </div>
                                            </td>';
                                }
                                ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php } ?>
        <!-- END OF RIWAYAT PENDAFTARAN -->
        <!-- DAFTAR EVENT -->
        <div class="pt-5">
            <h6><b>Daftar <?= $judul[0]; ?></b></h6>
            <table class="table table-border">
                <thead style="font-weight: normal;">
                    <?php
                    if ($data['judulHalaman'] == "Seminar - ICF 2021")
                        echo "<th class='nama-seminar daftar-nama-seminar'>Nama Seminar</th>
                                <th class='pembicara'>Pembicara</th>
                                <th class='tanggal-jam'>Tanggal & Jam</th>
                                <th class='status'>Status</th>
                                <th class='btn-daftar-seminar'></th>";
                    else if ($data['judulHalaman'] == "Lomba - ICF 2021")
                        echo "<th class='nama-cabang-lomba'>Nama Cabang Lomba</th>
                                <th>Tanggal & Jam</th>
                                <th>Jenis</th>
                                <th class='details'></th>";
                    else if ($data['judulHalaman'] == "Pameran - ICF 2021")
                        echo "<th style='width: 30%;'>Nama/Judul Karya</th>
                                <th style='width: 20%;'>Author</th>
                                <th>Deskripsi</th>";
                    ?>
                </thead>
                <tbody>
                    <?php foreach ($data['listAllEvent'] as $key) :
                        $tglMulai = date("d M Y", strtotime($key['tanggal_mulai']));
                        $tglSelesai = date("d M Y", strtotime($key['tanggal_selesai']));
                        $paramEvent = strtolower(str_replace(' ', '-', $key['nama']));
                        $status = (strtotime('now') > strtotime($tglSelesai)) ? "Closed" : "Open";
                    ?>
                        <tr>
                            <?php
                            if ($data['judulHalaman'] == "Seminar - ICF 2021") {
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
                                        <span class="centered-content"><a class="btn <?php echo ($status == "Open") ? "btn-outline-success btn-sign-up" : "btn-outline-secondary btn-disabled disabled"; ?>" data-bs-toggle="modal" href="<?php echo ($status == "Open") ? "#modalToggle" . $key['id'] : ""; ?>" role="button">Sign Up</a></span>
                                    </div>
                                </td>
                            <?php } else if ($data['judulHalaman'] == "Lomba - ICF 2021") { ?>
                                <td class="daftar-lomba">
                                    <div class="half-content">
                                        <span class="centered-content"><?= $key['nama'] ?></span>
                                    </div>
                                </td>
                                <td class="daftar-lomba">
                                    <div class="half-content">
                                        <span class="centered-content"><?= (($tglMulai == $tglSelesai) ? $tglMulai : $tglMulai . ' - ' . $tglSelesai) ?></span>
                                    </div>
                                </td>
                                <td class="daftar-lomba">
                                    <div class="half-content">
                                        <span class="centered-content"><?= $key['jenis'] ?></span>
                                    </div>
                                </td>
                                <td class="daftar-lomba">
                                    <div class="half-content" style="text-align: center !important;">
                                        <?php
                                        $class_enabled = ($status == "Open") ? 'btn-outline-success btn-sign-up' : 'btn-outline-secondary btn-disabled disabled';
                                        echo (($key['jenis'] == "Lomba Kelompok") ? '<form action="' . BASEURL . '/event/formLomba" method="post"><button class="btn ' . $class_enabled . '" name="eid" value="' . $key['id'] . '">Sign Up</button></form>' : '<button class="btn ' . $class_enabled . '" data-bs-toggle="modal" href="#modalToggle' . $key['id'] . '" role="button">Sign Up</button>');
                                        ?>
                                    </div>
                                </td>
                            <?php } else if ($data['judulHalaman'] == "Pameran - ICF 2021") { ?>
                                <td class="daftar-pameran">
                                    <div class="half-content">
                                        <span class="centered-content"><?= $key['nama']; ?></span>
                                    </div>
                                </td>
                                <td class="daftar-pameran">
                                    <div class="half-content">
                                        <span class="centered-content"><?= $key['author']; ?></span>
                                    </div>
                                </td>
                                <td class="daftar-pameran">
                                    <div class="half-content">
                                        <span class="centered-content"><?= $key['deskripsi']; ?></span>
                                    </div>
                                </td>
                            <?php } ?>
                        </tr>
                        <!-- MODAL PENDAFTARAN -->
                        <?php
                        $page_name = strtolower(str_replace(' ', '-', $key['jenis']));
                        ?>
                        <div class="modal fade <?= $page_name; ?>" id="modalToggle<?= $key['id']; ?>" aria-hidden="true" aria-labelledby="modalToggle<?= $key['id']; ?>Label" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered <?= $page_name; ?>">
                                <div class="modal-content <?= $page_name; ?>">
                                    <div class="modal-header <?= $page_name; ?>">
                                        <div class="modal-header-layer"></div>
                                        <div class="modal-header-content <?= $page_name; ?>">
                                            <button type="button" class="btn-close btn-modal-close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#fff" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                    <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
                                                </svg>
                                            </button>
                                            <h3 class="modal-title" id="modalToggle<?= $key['id']; ?>Label"><?= $key['nama']; ?><?php echo ($key['jenis'] == "Lomba Individu") ? ' Registration<br>Syarat & Ketentuan' : ''; ?></h3>
                                        </div>
                                    </div>
                                    <div class="modal-body <?= $page_name; ?>">
                                        <div class="lomba">
                                            <div class="container lomba-content">
                                                <div class="syarat">
                                                    <?= $key['syarat_ketentuan']; ?>
                                                </div>
                                                <div class="modal-submit">
                                                    <form action="<?= BASEURL; ?>/event/daftarEvent" method="post">
                                                        <div class="input-group mb-3">
                                                            <div class="container-link-drive">
                                                                <span class="text-link-drive">Drive Link</span>
                                                                <input type="text" class="form-control input-link-drive" aria-describedby="button-addon2" name="link" required>
                                                            </div>
                                                            <button type="submit" class="btn btn-modal-info btn-sign-up" id="button-addon2" name="eid" value="<?= $key['id']; ?>">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-body-content modal-body-desc"><?= $key['deskripsi']; ?></div>
                                        <div class="modal-body-content modal-body-info">
                                            <span class="modal-info"><span class="icf-color" style="margin-right: 7px;"><?= $key['jenis']; ?></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-info-circle" viewBox="0 -1 18 18">
                                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                                    </svg></span></span>
                                            <span class="modal-info"><span class="icf-color" style="margin-right: 7px;"><?php echo ($tglMulai == $tglSelesai) ? $tglMulai : $tglMulai . ' - ' . $tglSelesai; ?></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar" viewBox="0 -1 18 18">
                                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                                    </svg></span></span>
                                            <span class="modal-info"><span class="icf-color" style="margin-right: 7px;">15.10 WIB</span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-clock" viewBox="0 -1 18 18">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg></span></span>
                                            <?php if ($key['jenis'] == 'Seminar') { ?>
                                                <form action="<?= BASEURL; ?>/event/daftarEvent" method="post">
                                                    <input type="hidden" name="eid" value="<?= $key['id']; ?>">
                                                    <input type="submit" class="btn btn-modal-info btn-sign-up" value="Sign Up for this event">

                                                </form>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END OF MODAL PENDAFTARAN -->
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- END OF DAFTAR EVENT -->
    </div>
</div>

<!-- MODAL RIWAYAT -->
<div class="modal fade" id="modalEvent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class=" modal-content">
            <div class="modal-inner">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="p-4" id="modal_lomba_kelompok">
                    <div class="mb-3 row">
                        <label for="nama_tim" class="col-sm-3 col-form-label">Nama Tim</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_tim" name="nama_tim" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="id_game_ketua" class="col-sm-3 col-form-label">ID Game Ketua</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="id_game_ketua" name="id_game_ketua" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="link_drive_tim" class="col-sm-3 col-form-label">Link Drive Tim</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="link_drive_tim" name="link_drive_tim" readonly>
                        </div>
                    </div>
                    <?php for ($i = 1; $i <= 3; $i++) { ?>
                        <div class="mb-3 row">
                            <h1>Anggota <?= $i; ?>:</h1><br>
                            <label for="nama_<?= $i; ?>" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama_<?= $i; ?>" name="nama_<?= $i; ?>" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="no_hp_<?= $i; ?>" class="col-sm-3 col-form-label">No HP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="no_hp_<?= $i; ?>" name="no_hp_<?= $i; ?>" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email_<?= $i; ?>" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email_<?= $i; ?>" name="email_<?= $i; ?>" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nrp_<?= $i; ?>" class="col-sm-3 col-form-label">NRP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nrp_<?= $i; ?>" name="nrp_<?= $i; ?>" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="id_game_<?= $i; ?>" class="col-sm-3 col-form-label">ID Game</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="id_game_<?= $i; ?>" name="id_game_<?= $i; ?>" readonly>
                            </div>
                        </div>

                    <?php } ?>
                </div>
                <div class="px-3 pt-4" id="modal_lomba_individu">
                    <div class="mb-3 row">
                        <label for="link_drive_individu" class="col-sm-3 col-form-label">Link Drive</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="link_drive_individu" name="link_drive_individu" readonly>
                        </div>
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
        const jenis = $(this).data('jenis');
        $.ajax({
            method: 'post',
            url: '<?= BASEURL; ?>/user/getDetilRiwayat',
            data: {
                eid: idevent
            },
            dataType: 'json',
            success: function(data) {
                if (jenis == "Lomba Kelompok") {
                    $('#modal_lomba_kelompok').show();
                    $('#modal_lomba_individu').hide();
                    $('#nama_tim').val(data[0]['nama_tim']);
                    $('#id_game_ketua').val(data[0]['id_game']);
                    $('#link_drive_tim').val(data[0]['link_drive']);

                    for (let i = 1; i <= 3; i++) {
                        $('#nama_' + i).val(data[i]['nama']);
                        $('#no_hp_' + i).val(data[i]['no_hp']);
                        $('#email_' + i).val(data[i]['email']);
                        $('#nrp_' + i).val((data[i]['nrp'] == "") ? "-" : data[i]['nrp']);
                        $('#id_game_' + i).val(data[i]['id_game']);
                    }
                } else {
                    $('#modal_lomba_individu').show();
                    $('#modal_lomba_kelompok').hide();
                    $('#link_drive_individu').val(data[0]['link_drive']);
                }

            }
        });
    });
</script>