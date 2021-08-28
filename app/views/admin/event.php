<h1 class="mt-4">Events</h1>
<button type="button" class="mb-3 btn btn-primary" id="tambahEvent" data-bs-toggle="modal" data-bs-target="#modalEvent">
    Tambah Event
</button>
<table class="table table-border table-dark">
    <thead>
        <td>Nama</td>
        <td>Tanggal</td>
        <td>Jenis</td>
        <td>Aksi</td>
    </thead>
    <tbody>
        <?php foreach ($data['listAllEvent'] as $key) :
            $tglMulai = date("d M Y", strtotime($key['tanggal_mulai']));
            $tglSelesai = date("d M Y", strtotime($key['tanggal_selesai']));
        ?>
            <tr>
                <td><?= $key['nama']; ?></td>
                <td><?php echo ($tglMulai == $tglSelesai) ? $tglMulai : $tglMulai . ' - ' . $tglSelesai ?></td>
                <td><?= $key['jenis']; ?></td>
                <td style="max-width: 100px;">
                    <a class="btn btn-altorange me-5" id="editEvent" data-id="<?= $key['id']; ?>" data-bs-toggle="modal" data-bs-target="#modalEvent">Edit</a>
                    <a href="<?= BASEURL; ?>/admin/detil/<?= $key['id']; ?>" class="btn btn-altdarkgrey">Detail</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="modalEvent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class=" modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="modal-body" action="" method="POST">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="input" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $.ajax({
        method: 'post',
        url: '<?= BASEURL; ?>/admin/getJenisEvent',
        dataType: 'json',
        success: function(data) {
            data.forEach(e => {
                $('#selectJenis').append('<option value="' + e.id + '">' + e.jenis + '</option>');
            });
        }
    })
    Date.prototype.toDateInputValue = (function(date = this) {
        var local = new Date(date);
        local.setMinutes(date.getMinutes() - date.getTimezoneOffset());
        return local.toJSON().slice(0, 10);
    });
    $('body').on('click', '#tambahEvent', function() {
        $('#modalTitle').html('Tambah Event');
        $('form').attr('action', '<?= BASEURL; ?>/admin/tambahEvent');
        $('#nama').val('');
        $('#tgl_mulai').val(new Date().toDateInputValue());
        $('#tgl_selesai').val(new Date().toDateInputValue());
        $('#deskripsi').val('');
        $('#author').val('');
        $('#syarat').val('');
        $('#linkwa').val('');
        $('#linkzoom').val('');
        $('#selectJenis').val('1');
    })

    $('body').on('click', '#editEvent', function() {
        $('#modalTitle').html('Edit Event');
        $('form').attr('action', '<?= BASEURL; ?>/admin/updateEvent');

        const idevent = $(this).data('id');
        $('input[type="hidden"]').remove();
        $('form').append('<input type="hidden" name="eid" value="' + idevent + '">')
        $.ajax({
            method: 'post',
            url: '<?= BASEURL; ?>/admin/getEvent',
            data: {
                eid: idevent
            },
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#tgl_mulai').val(data.tanggal_mulai);
                $('#tgl_selesai').val(data.tanggal_selesai);
                $('#deskripsi').val(data.deskripsi);
                $('#author').val(data.author);
                $('#syarat').val(data.syarat_ketentuan);
                $('#linkwa').val(data.link_wa);
                $('#linkzoom').val(data.link_zoom);
                $('#selectJenis').val(data.jenis_id);
            }
        })
    })
</script>