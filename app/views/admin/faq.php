<h1 class="mt-4">FAQs</h1>
<button type="button" id='insertFaq' class="btn btn-primary mt-4 mb-4" data-bs-toggle="modal" data-bs-target="#modalFaq">
    Tambah Faq
</button>

<div class="accordion" id="accordionExample">
    <?php
    $words = array(
        'units' => array('', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'),
        'tens' => array('', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety')
    );
    $result = array();
    $iterasi = 1;
    ?>
    <div class="row">
        <?php foreach ($data['listAllFaq'] as $key) :
            $tens = floor($iterasi / 10);
            $units = $iterasi % 10;

            if ($tens < 2) {
                $result[] = $words['units'][$tens * 10 + $units];
            } else {
                $result[] = $words['tens'][$tens];

                if ($units > 0) {
                    $result[count($result) - 1] .= '-' . $words['units'][$units];
                }
            }
            if (empty($result[0])) {
                $result[0] = 'Zero';
            }
        ?>
            <div class="col-10">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading<?= $result[0]; ?>">
                        <button class="accordion-button collapsed  accordion-pertanyaan" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $result[0]; ?>" id-faq="<?= $key['id']; ?>" aria-expanded="false" aria-controls="collapse<?= $result[0]; ?>">
                            <?= $key['pertanyaan']; ?>
                        </button>
                    </h2>
                    <div id="collapse<?= $result[0]; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $result[0]; ?>" data-bs-parent="#accordionExample">
                        <div class="accordion-body accordion-jawaban" id-faq="<?= $key['id']; ?>">
                            <?= $key['jawaban']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <button class="btn btn-altorange editFaq ms-5" id-faq="<?= $key['id']; ?>" data-bs-toggle="modal" data-bs-target="#modalFaq">edit</button>
                <button class="btn btn-danger ms-5 deleteFaq" id-faq='<?= $key['id']; ?>' id="deleteFaq" data-bs-toggle="modal" data-bs-target="#modalFaq">delete</button>
            </div>
        <?php
            $result = null;
            $iterasi += 1;
        endforeach; ?>
    </div>
</div>
<div class="modal fade" id="modalFaq" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Tambah FAQ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form" action="<?= BASEURL; ?>/admin/tambahfaq" method="POST">
                <input type="hidden" name="id" value="">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="inputPertanyaan" class="col-sm-2 col-form-label">Pertanyaan</label>
                        <div class="col-sm-10">
                            <input type="Pertanyaan" class="form-control" id="inputPertanyaan" name="pertanyaan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputJawaban" class="col-sm-2 col-form-label">Jawaban</label>
                        <div class="col-sm-10">
                            <input type="Pertanyaan" class="form-control" id="inputJawaban" name="jawaban">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="input" id="btninput" class="btn btn-primary">Save changes</button>
                </div>

            </form>
        </div>
    </div>
</div>
<script src="<?= BASEURL; ?>/js/jquery.js"></script>
<script>
    $('body').on('click', '#insertFaq', function() {
        $('#modalTitle').html('Tambah FAQ');
        $('form').attr('action', '<?= BASEURL; ?>/admin/tambahFaq');
        $('#inputPertanyaan').val('');
        $('#inputJawaban').val('');
    })

    $('body').on('click', '.editFaq', function() {
        const idFaq = $(this).attr('id-faq');
        $('input[type=hidden]').val(idFaq);
        $('#modalTitle').html('Edit FAQ');
        $('form').attr('action', '<?= BASEURL; ?>/admin/editFaq');

        // $('#inputPertanyaan').val("");
        // $('#inputJawaban').val("");

        // const contentPertanyaan = $(".accordion-pertanyaan[id-faq='" + idFaq + "']").html();
        // const contentJawaban = $(".accordion-jawaban[id-faq='" + idFaq + "']").html();

        // $('#inputPertanyaan').val(contentPertanyaan);
        // $('#inputJawaban').val(contentJawaban);

        $.ajax({
            method: 'post',
            url: '<?= BASEURL; ?>/admin/getFaqById',
            data: {
                id: idFaq
            },
            dataType: 'json',
            success: function(data) {
                $('#inputPertanyaan').val(data.pertanyaan);
                $('#inputJawaban').val(data.jawaban);
            }
        })
    })

    $('body').on('click', '.deleteFaq', function() {
        const idFaq = $(this).attr('id-faq');
        $('input[type=hidden]').val(idFaq);
        $('#modalTitle').html('Yakin dihapus?');
        $('form').attr('action', '<?= BASEURL; ?>/admin/deleteFaq');

        // const contentPertanyaan = $(".accordion-pertanyaan[id-faq='" + idFaq + "']").html();
        // const contentJawaban = $(".accordion-jawaban[id-faq='" + idFaq + "']").html();
        // $('#inputPertanyaan').val(contentPertanyaan);
        // $('#inputJawaban').val(contentJawaban);

        $.ajax({
            method: 'post',
            url: '<?= BASEURL; ?>/admin/getFaqById',
            data: {
                id: idFaq
            },
            dataType: 'json',
            success: function(data) {
                $('#inputPertanyaan').val(data.pertanyaan);
                $('#inputJawaban').val(data.jawaban);
            }
        })
    })
</script>