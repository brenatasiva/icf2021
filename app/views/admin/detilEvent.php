<div class="container">
    <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link <?= (isset($_SESSION['updatedDetil'])) ? '' : 'active'; ?>" id="home-tab" data-bs-toggle="tab" href="#home" role="tablist" type="button" aria-controls="home" aria-selected="<?= (isset($_SESSION['updatedDetil'])) ? 'false' : 'true'; ?>">Detail Event</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link <?= (isset($_SESSION['updatedDetil'])) ? 'active' : ''; ?>" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tablist" type="button" aria-controls="profile" aria-selected="<?= (isset($_SESSION['updatedDetil'])) ? 'true' : 'false'; ?>"><?= ($data['detilEvent']['jenis'] == 'Lomba Kelompok') ? 'Perwakilan' : 'Peserta'; ?></button>
        </li>
        <?php if ($data['detilEvent']['jenis'] == 'Lomba Kelompok') : ?>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#anggota" role="tablist" type="button" aria-controls="profile" aria-selected="false">Anggota</button>
            </li>
        <?php endif; ?>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade <?= (isset($_SESSION['updatedDetil'])) ? '' : 'active show'; ?>" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="container">
                <ul class="list-group mt-5">
                    <?php foreach ($data['detilEvent'] as $key => $value) : ?>
                        <li class="list-group-item"><?= $key . " : " . $value; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <?php if ($data['detilEvent']['jenis'] == 'Lomba Kelompok') : ?>
            <div class="tab-pane fade" id="anggota" role="tabpanel" aria-labelledby="profile-tab">
                <button id="exportTableToExcel" data-id="tableLomba">Export table to excel</button>
                <table class="table" id="tableLomba">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NRP</th>
                            <th>NO_HP</th>
                            <th>Email</th>
                            <th>ID_Game</th>
                            <th>Nama Tim</th>
                            <th>Link</th>
                            <th>Status</th>
                        </tr> 
                    </thead>
                    <tbody>

                        <?php $ip=1; foreach ($data['detilPeserta'] as $perwakilan) : ?>
                            <tr>
                                <td class="table-info"><?= $ip; ?></td>
                                <td class="table-info"><?= $perwakilan['nama']; ?></td>
                                <td class="table-info"><?= $perwakilan['nrp']; ?></td>
                                <td class="table-info"><?= $perwakilan['no_hp']; ?></td>
                                <td class="table-info"><?= $perwakilan['email']; ?></td>
                                <td class="table-info"><?= $perwakilan['id_game']; ?></td>
                                <td class="table-info"><?= $perwakilan['nama_tim']; ?></td>
                                <td class="table-info"><?= $perwakilan['link_drive']; ?></td>
                                <?php
                                $ip++;
                                $i = 1;
                                foreach ($data['allAnggota'] as $anggota) {
                                    if ($anggota['pendaftar_id'] == $perwakilan['id']) {
                                        $i++;
                                    }
                                } ?>
                                <td rowspan="<?= $i; ?>" class="align-middle text-center">
                                    <?= $perwakilan['status']; ?>
                                </td>
                            </tr>
                            <?php foreach ($data['allAnggota'] as $anggota) : ?>
                                <?php if ($anggota['pendaftar_id'] == $perwakilan['id']) { ?>
                                    <tr>
                                        <td>&nbsp</td>
                                        <td><?= $anggota['nama']; ?></td>
                                        <td><?= $anggota['nrp']; ?></td>
                                        <td><?= $anggota['no_hp']; ?></td>
                                        <td><?= $anggota['email']; ?></td>
                                        <td><?= $anggota['id_game']; ?></td>
                                        <td><?= $perwakilan['nama_tim']; ?></td>
                                        <td><?= $perwakilan['link_drive']; ?></td>
                                    </tr>
                                <?php } ?>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
        <div class="tab-pane fade <?= (isset($_SESSION['updatedDetil'])) ? 'active show' : ''; ?>" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <form action="<?= BASEURL; ?>/admin/updateDetil" method="POST">
                <input type="hidden" name="idevent" value="<?= $data['detilEvent']['id']; ?>">
                <button id="exportTableToExcel" data-id="tableSeminar">Export table to excel</button>
                <table class="table table-striped" id="tableSeminar">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NRP</th>
                            <th scope="col">Email</th>
                            <th scope="col">No_HP</th>
                            <th scope="col">Tanggal Daftar</th>
                            <th scope="col">Nama Tim</th>
                            <th scope="col">ID_Game</th>
                            <th scope="col">Link Drive</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($data['detilPeserta'] as $peserta) : ?>
                            <tr>
                                <td><?= $i; ?><input type="hidden" name="id[]" value="<?= $peserta['id']; ?>"></td>
                                <td><?= $peserta['nama']; ?></td>
                                <td><?= $peserta['nrp']; ?></td>
                                <td><?= $peserta['email']; ?></td>
                                <td><?= $peserta['no_hp']; ?></td>
                                <td><input type="date" class="form-control" id="tanggal_daftar[]" name="tanggal_daftar[]" value="<?= $peserta['tanggal_daftar']; ?>"></td>
                                <td><input type="text" class="form-control" id="nama_tim[]" name="nama_tim[]" value="<?= $peserta['nama_tim']; ?>"></td>
                                <td><input type="text" class="form-control" id="id_game[]" name="id_game[]" value="<?= $peserta['id_game']; ?>"></td>
                                <td><input type="text" class="form-control" id="link_drive[]" name="link_drive[]" value="<?= $peserta['link_drive']; ?>"><?= $peserta['link_drive']; ?></td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="status[]">
                                        <option value="Pending" <?= ($peserta['status']) == "Pending" ? 'Selected' : ''; ?>>Pending</option>
                                        <option value="Diterima" <?= ($peserta['status']) == "Diterima" ? 'Selected' : ''; ?>>Diterima</option>
                                        <option value="Ditolak" <?= ($peserta['status']) == "Ditolak" ? 'Selected' : ''; ?>>Ditolak</option>
                                    </select>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-warning float-end">SAVE</button>
            </form>
        </div>
    </div>
</div>
<?php unset($_SESSION['updatedDetil']); ?>
<div style="clear:both;"></div>

<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>

<script>
    var elt = "";
    $('body').on('click', '#exportTableToExcel', function() {
        elt = document.getElementById($(this).data('id'));
        ExportToExcel('xlsx');
    })


    function ExportToExcel(type, fn, dl) {
        var wb = XLSX.utils.table_to_book(elt, {
            sheet: "sheet1"
        });
        return dl ?
            XLSX.write(wb, {
                bookType: type,
                bookSST: true,
                type: 'base64'
            }) :
            XLSX.writeFile(wb, fn || ('MySheetName.' + (type || 'xlsx')));
    }
</script>