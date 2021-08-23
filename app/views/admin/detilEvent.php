<div class="container">
    <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link <?= (isset($_SESSION['updatedDetil'])) ? '' : 'active'; ?>" id="home-tab" data-bs-toggle="tab" href="#home" role="tablist" type="button" aria-controls="home" aria-selected="<?= (isset($_SESSION['updatedDetil'])) ? 'false' : 'true'; ?>">Detail Event</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link <?= (isset($_SESSION['updatedDetil'])) ? 'active' : ''; ?>" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tablist" type="button" aria-controls="profile" aria-selected="<?= (isset($_SESSION['updatedDetil'])) ? 'true' : 'false'; ?>">Peserta</button>
        </li>

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
        <div class="tab-pane fade <?= (isset($_SESSION['updatedDetil'])) ? 'active show' : ''; ?>" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <form action="<?= BASEURL; ?>/admin/updateDetil" method="POST">
                <input type="hidden" name="idevent" value="<?= $data['detilEvent']['id']; ?>">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Username</th>
                            <th scope="col">Tanggal Daftar</th>
                            <th scope="col">Nama Tim</th>
                            <th scope="col">Game</th>
                            <th scope="col">Link Drive</th>
                            <th scope="col">Status
                            <th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($data['detilPeserta'] as $peserta) : ?>
                            <tr>
                                <td><?= $i; ?><input type="hidden" name="id[]" value="<?= $peserta['id']; ?>"></td>
                                <td><?= $peserta['user_username']; ?></td>
                                <td><input type="date" class="form-control" id="tanggal_daftar[]" name="tanggal_daftar[]" value="<?= $peserta['tanggal_daftar']; ?>"></td>
                                <td><input type="text" class="form-control" id="nama_tim[]" name="nama_tim[]" value="<?= $peserta['nama_tim']; ?>"></td>
                                <td><input type="text" class="form-control" id="id_game[]" name="id_game[]" value="<?= $peserta['id_game']; ?>"></td>
                                <td><input type="text" class="form-control" id="link_drive[]" name="link_drive[]" value="<?= $peserta['link_drive']; ?>"></td>
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
<script>
    $('#select-all').click(function(event) {
        if (this.checked) {
            // Iterate each checkbox
            $(':checkbox').each(function() {
                this.checked = true;
            });
        } else {
            $(':checkbox').each(function() {
                location.reload();
            });
        }
    });

    function myFunction() {
        const chkbox = document.querySelectorAll(".form-check-input");
        const hiddenchkbox = document.querySelectorAll('.hiddencheckbox');
        for (let i = 0; i < chkbox.length; i++) {
            if (chkbox[i].checked == true) {
                hiddenchkbox[i].disabled = true;
            } else {
                hiddenchkbox[i].disabled = false;
            }
        }
    }
</script>