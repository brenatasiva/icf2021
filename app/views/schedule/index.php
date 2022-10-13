<style type="text/css">
    .schedule-header-bg {
        background-image: url("<?= BASECSS; ?>/img/judul_event_BG.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .schedule-title {
        margin: 0px !important;
        font-size: 3.5rem;
    }

    .waktu, .live-status {
        width: 15%;
    }

    .ishoma td {
        background: #eeeeef !important;
    }

    .live {
        margin-right: 10px;
    }

    table {
        border: 1px solid #009b8d !important;
        margin-bottom: 0 !important;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
    }

    th {
        background: #009b8d !important;
        color: white;
        border-bottom: 1px solid #009b8d !important;
        width: 100%;
    }

    td {
        display: table-cell;
        vertical-align: middle;
        border: none;
        border-bottom: 1px solid #009b8d;
    }

    tr:last-child td {
        border-bottom: 0 !important;
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

    /*https://css-tricks.com/responsive-data-tables/*/
    @media only screen and (max-width: 767px),
    (min-device-width: 776px) and (max-device-width: 767px) {

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
            display: flex;
            width: 40%;
            vertical-align: top;
            padding: 1.5rem 1rem;
            background: #009b8d;
            font-weight: bold;
            color: white;
        }

        td.schedule:nth-of-type(1):before {
            content: "Waktu";
        }

        td.schedule:nth-of-type(2):before {
            content: "Live ";
        }

        td.schedule:nth-of-type(3):before {
            content: "Kegiatan ";
        }


        .half-content {
            display: flex;
            width: 59%;
            padding: 0rem 1rem 0 0.5rem;
        }

        td.schedule {
            display: flex;
        }

        .centered-content {
            display: grid;
            align-content: center;
            padding: 3px 0;
            height: 100%;
        }
    }

</style>
<div class="schedule-header-bg">
    <div class="container">
        <div class="row" style="padding-top: 60px;">
            <div class="col d-flex justify-content-center align-items-end">
                <h1 class="schedule-title text-light fw-bold circular-icf">DAY - 3</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="pt-5" style="padding-bottom: 7rem;">
        <table>
            <thead>
                <th class="waktu">Waktu</th>
                <th class="live-status"></th>
                <th>Kegiatan</th>
            </thead>
            <tbody>
                <?php
                    date_default_timezone_set('Asia/Jakarta');

                    $dateTime = new DateTime();
                    $now = $dateTime->format('d-m-Y H:i');
                    
                    foreach ($data["list_schedule"] as $key): 
                ?>
                    <tr <?php if ($key['kegiatan'] == "ISHOMA") echo "class='ishoma'"; ?>>
                        <td class="schedule">
                            <div class="half-content">
                                <span class="centered-content"><?php echo date("H:i", strtotime($key['waktu_mulai']))." - ".date("H:i", strtotime($key['waktu_selesai'])); ?></span>
                            </div>
                        </td>
                        <td class="schedule" style="text-align: center;">
                            <div class="half-content">
                                <span class="centered-content"><?php
                                    if (strtotime($now) >= strtotime($key['waktu_mulai']) && strtotime($now) < strtotime($key['waktu_selesai'])) {
                                        echo "<span class='live badge bg-danger' style='letter-spacing: 1px;'>NOW</span>";
                                    }
                                ?></span>
                            </div>
                        </td>
                        <td class="schedule">
                            <div class="half-content">
                                <span class="centered-content"><?php 
                                    echo $key['kegiatan'];
                                ?></span>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
              <?php //echo $data['current_schedule']['waktu_selesai']; ?> 
        </table>
    </div>
</div>

<script type="text/javascript">
    // var currentSchedule = ""; 
    $(document).ready(function(){
        // currentSchedule = <?= $data['current_schedule'] != null ? $data['current_schedule']['waktu_selesai'] : "";
        // ?>;
        // console.log(currentSchedule);
    });
    

    // if (currentSchedule != "") {
    //     var countdown = setInterval(function(){
    //         var today = new Date().getTime();

    //         var diff = targetDate - today;

    //         var hour = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    //         var min = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    //         var sec = Math.floor((diff % (1000 * 60)) / 1000);

    //         if (diff < 0) {
    //             clearInterval(x);
    //             return;
    //         }
    //     });
    // }
</script>