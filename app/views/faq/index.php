<h1 class="mt-4">FAQs</h1>

<div class="accordion" id="accordionExample">
    <?php foreach ($data['listAllFaq'] as $key) : ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <?= $key['pertanyaan']; ?>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong><?= $key['pertanyaan']; ?></strong><?= $key['jawaban']; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>