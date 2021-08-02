<h1 class="mt-4">FAQs</h1>

<div class="accordion" id="accordionExample">
    <?php

    $words = array(
        'units' => array('', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'),
        'tens' => array('', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety')
    );
    $result = array();
    $iterasi = 1;
    ?>
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

        <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?= $result[0]; ?>">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $result[0]; ?>" aria-expanded="false" aria-controls="collapse<?= $result[0]; ?>">
                    <?= $key['pertanyaan']; ?>
                </button>
            </h2>
            <div id="collapse<?= $result[0]; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $result[0]; ?>" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <?= $key['jawaban']; ?>
                </div>
            </div>
        </div>
    <?php
        $result = null;
        $iterasi += 1;
    endforeach; ?>

</div>