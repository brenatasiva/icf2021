<style type="text/css">
    .faq-header-bg {
        background-image: url("<?= BASEURL; ?>/img/faq/judul_faq_bg.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .faq-title {
        margin: 0px !important;
    }

    .accordion {
        font-weight: lighter;
    }

    .accordion-button::after {
        content: none;
    }

    .accordion-button .bi-plus-lg {
        display: block !important;
    }

    .accordion-button .bi-dash-lg {
        display: none !important;
    }

    .accordion-button:not(.collapsed) .bi-plus-lg {
        display: none !important;
    }

    .accordion-button:not(.collapsed) .bi-dash-lg {
        display: block !important;
    }

    .inner-container {
        padding: 100px 0 150px 0;
    }

    .accordion-item {
        margin-bottom: 40px;
    }

    .accordion-item:not(:first-of-type) {
        border-top: 1px solid rgba(0, 0, 0, 0.125) !important;
    }

    .accordion-button:not(.collapsed) {
        color: black !important;
        background-color: white !important;
    }

    .bi-dash-lg,
    .bi-plus-lg {
        color: #009b8d !important;
    }

    .accordion-collapse {
        background-color: #009b8d !important;
        color: white !important;
    }

    .accordion-item:first-of-type {
        border-bottom-right-radius: 0 !important;
        border-bottom-left-radius: 0 !important;
        border-top-left-radius: 0 !important;
        border-top-right-radius: 0 !important;
    }

    .accordion-item:first-of-type .accordion-button {
        border-bottom-right-radius: 0 !important;
        border-bottom-left-radius: 0 !important;
        border-top-left-radius: 0 !important;
        border-top-right-radius: 0 !important;
    }

    .accordion-item:last-of-type .accordion-collapse {
        border-bottom-right-radius: 0 !important;
        border-bottom-left-radius: 0 !important;
    }

    .accordion-item:last-of-type .accordion-button.collapsed {
        border-bottom-right-radius: 0 !important;
        border-bottom-left-radius: 0 !important;
    }

    .accordion-item:last-of-type {
        border-bottom-right-radius: 0 !important;
        border-bottom-left-radius: 0 !important;
    }

    .accordion-item:not(:first-of-type) {
        border-top: 1px solid #009b8d !important;
    }

    .accordion-item {
        border: 1px solid #009b8d !important;
    }

    .accordion-button:focus {
        box-shadow: 0 0 0 0 !important;
    }

    .accordion-item {
        width: 75%;
    }
</style>
<div class="faq-header-bg">
    <div class="container">
        <div class="row" style="padding-top: 60px; padding-bottom: 10px;">
            <div class="col d-flex justify-content-start align-items-end">
                <img src="<?= BASEURL; ?>/img/faq/white_dot.png" style="width: 20px; height: 20px; margin-bottom: 5px; margin-left: 15px;">
                <h1 class="faq-title text-light fw-bold">FAQ's</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="inner-container">
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

                <div class="accordion-item" style="margin-left: auto; margin-right: auto;">
                    <h2 class="accordion-header" id="heading<?= $result[0]; ?>">
                        <button class="accordion-button collapsed justify-content-between" style="font-weight: lighter !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $result[0]; ?>" aria-expanded="false" aria-controls="collapse<?= $result[0]; ?>">
                            <?= $key['pertanyaan']; ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                                <path d="M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z" />
                            </svg>
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
    </div>
</div>