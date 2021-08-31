<style>
    @media (max-width: 767px) {
        .carousel-inner .carousel-item>div {
            display: none;
        }

        .carousel-inner .carousel-item>div:first-child {
            display: block;
        }

        .carousel-transparant {
            display: none;
        }
    }

    .carousel-inner .carousel-item.active,
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
        display: flex;
    }

    /* medium and up screens */
    @media (min-width: 768px) {

        .carousel-inner .carousel-item-end.active,
        .carousel-inner .carousel-item-next {
            transform: translateX(33.33%);
        }

        .carousel-inner .carousel-item-start.active,
        .carousel-inner .carousel-item-prev {
            transform: translateX(-33.33%);
        }

        .carousel-transparant {
            display: block;
        }
    }

    .carousel-inner .carousel-item-end,
    .carousel-inner .carousel-item-start {
        transform: translateX(0);
    }
</style>
<div style='position:relative; height:auto;'>
    <div class="divText d-flex justify-content-center align-items-center" style='flex-direction:column; text-align:center; height:100%;'>
        <img style='width:40px;aspect-ratio:1/1;' src="img/about/logoicf.png" alt="">
        <h1 style='color:white;'><b>About ICF</b></h1>
        <p class="aboutText">ICF (Informatics Creative Festival) adalah sebuah festival yang memamerkan hasil-hasil karya mahasiswa dari Informatika Universitas Surabaya.
            Tiap tahunnya, ICF mengenalkan desain dan pemrograman melalui pameran karya-karya mahasiswa akhir teknik informatika UBAYA.
            Selain itu, ICF juga ada berbagai macam seminar dan lomba untuk menambah pengetahuan dan mengasah kemampuan para peserta sesuai dengan perkembangan teknologi.</p>
        <br><button type="button" class="btn btn-outline-light">Register Now</button>
    </div>
    <img src="img/about/hero.jpg" width="100%">
    <style type="text/css">
        .aboutJudul {
            color: white;
            width: 100%;
            font-size: 80px;
            font-family: 'Circular Std Bold' !important;
        }

        .aboutText {
            color: white;
            width: 40%;
            font-family: 'Circular Std Thin' !important;
        }

        .divText {
            width: 100%;
            position: absolute;
        }
    </style>
</div>
<!-- carousel -->
<div class="container-fluid p-0 text-center">
    <div class="row my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner position-relative" role="listbox" style="z-index: 1;">
                <div class="position-absolute carousel-transparant" style="background-color: #0183bd; width: 33.33%; opacity: .55; height: 100%; z-index: 10000;"></div>
                <div class="position-absolute carousel-transparant" style="right:0; background-color: #0183bd; width: 33.33%; opacity: .55; height: 100%; z-index: 10000;"></div>
                <?php for ($i = 0; $i < 11; $i++) {
                    if ($i == 0) {
                ?>
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card" style="border-radius: 0px;">
                                    <img src="img/home/home_<?= $i + 1 ?>.JPG" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="img/home/home_<?= $i + 1 ?>.JPG" class="img-fluid">
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>

            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                <span class=" carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</div>
<!-- end of carousel -->

<!-- The Speakers -->
<div style='height: 24vh; width:100%; background:#efece7;'>
    <div style='position:relative; display: flex; top: 120px; left: 22%; width:fit-content;'>
        <img src="img/home/dotted.png" width="25px" height="25px" style="margin-top: 8px;" alt="">
        <h2 style="margin-left: 25px;"><b>The Speakers</b></h2>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4" style='padding: 0 20% 5% 20%; background:#efece7; margin: 0 !important;'>
    <div class="col">
        <div class="card h-100">
            <div style='position:relative;'>
                <img src="img/about/speaker1.jpg" class="card-img-top" alt="...">
                <h2 class="card-title" style='position:absolute; width:100%; text-align:center; bottom:0; color:#efece7;'><b>Avianto Tiyo</b></h2>
            </div>
            <div class="card-body" style='background-color:#efece7; border: 1px solid rgba(5,132,187,1); text-align:center; border-top:none;'>
                <p class="card-text">Internet of Things: Future Concept</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <div style='position:relative;'>
                <img src="img/about/speaker2.jpg" class="card-img-top" alt="...">
                <h2 class="card-title" style='position:absolute; width:100%; text-align:center; bottom:0; color:#efece7;'><b>Gerdy WK</b></h2>
            </div>
            <div class="card-body" style='background-color:#efece7; border: 1px solid rgba(5,132,187,1); text-align:center; border-top:none;'>
                <p class="card-text">Komik Indonesia dari Masa ke Masa</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <div style='position:relative;'>
                <img src="img/about/speaker3.jpg" class="card-img-top" alt="...">
                <h2 class="card-title" style='position:absolute; width:100%; text-align:center; bottom:0; color:#efece7;'><b>Is Yuniarto</b></h2>
            </div>
            <div class="card-body" style='background-color:#efece7; border: 1px solid rgba(5,132,187,1); text-align:center; border-top:none;'>
                <p class="card-text">Komik Indonesia dari Masa ke Masa</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <div style='position:relative;'>
                <img src="img/about/speaker4.jpg" class="card-img-top" alt="...">
                <h2 class="card-title" style='position:absolute; width:100%; text-align:center; bottom:0; color:#efece7;'><b>Yohanes D.P</b></h2>
            </div>
            <div class="card-body" style='background-color:#efece7; border: 1px solid rgba(5,132,187,1); text-align:center; border-top:none;'>
                <p class="card-text">Solusi Ekonomi, <br>Memiliki Lapak Online</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <div style='position:relative;'>
                <img src="img/about/speaker5.jpg" class="card-img-top" alt="...">
                <h2 class="card-title" style='position:absolute; width:100%; text-align:center; bottom:0; color:#efece7;'><b>Vincentius R.P</b></h2>
            </div>
            <div class="card-body" style='background-color:#efece7; border: 1px solid rgba(5,132,187,1); text-align:center; border-top:none;'>
                <p class="card-text">AI in Our Everyday Life and<br>How They Improve Our Lives</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <div style='position:relative;'>
                <img src="img/about/speaker5.jpg" class="card-img-top" alt="...">
                <h2 class="card-title" style='position:absolute; width:100%; text-align:center; bottom:0; color:#efece7;'><b>Lorem Ipsum</b></h2>
            </div>
            <div class="card-body" style='background-color:#efece7; border: 1px solid rgba(5,132,187,1); text-align:center; border-top:none;'>
                <p class="card-text">AI in Our Everyday Life and<br>How They Improve Our Lives</p>
            </div>
        </div>
    </div>
</div>
<!-- End of The Speakers -->


<!-- Competitions -->
<div style='height: auto; width:100%; position: relative;'>
    <img src="img/about/Competition.jpg" width='100%'>
    <div style='height:12.5%; width:100%; position:absolute; top:0;' class='d-flex justify-content-center align-items-center'>
        <h1 style='color:white;'><b>Competitions</b></h1>
    </div>
    <div style='height:42.5%; width:100%; position:absolute; top:12.5%;'>
        <div style='height:35%; background: url("img/about/pubg.jpg"); background-size: cover;' class='d-flex justify-content-center align-items-center'>
            <div style='width:100%; height:35%; position: absolute; top:0; background-color: black; opacity:.5;'></div>
            <img style='position:relative;' src="img/about/pubg.png" alt="">
            <h1 style='position:relative; color:white;'><b>PUBG Battles</b></h1>
        </div>
        <div style='margin: 0 15%; width:70%;'>
            <div class="row">
                <div class="col">
                    <img src="img/about/pubg1.png" style='width:100%; aspect-ratio:1/1;' alt="">
                    <h1 style='text-align:center; color:gold;'><b>1<sup>st</sup> Place</b></h1>
                    <h3 style='text-align:center; color:white;'>Rp. 500.000</h3>
                </div>
                <div class="col">
                    <img src="img/about/pubg2.png" style='width:100%; aspect-ratio:1/1;' alt="">
                    <h1 style='text-align:center; color: white;'><b>2<sup>nd</sup> Place</b></h1>
                    <h3 style='text-align:center; color:white;'>Rp. 250.000</h3>
                </div>
                <div class="col">
                    <img src="img/about/pubg3.png" style='width:100%; aspect-ratio:1/1;' alt="">
                    <h1 style='text-align:center; color: brown;'><b>3<sup>rd</sup> Place</b></h1>
                    <h3 style='text-align:center; color:white;'>Rp. 125.000</h3>
                </div>
            </div>
        </div>
    </div>
    <div style='height:45%; width:100%; position:absolute; top:55%;'>
        <div style='height:35%; background: url("img/about/drawing.jpg"); background-size: cover; background-position:0% 40%;' class='d-flex justify-content-center align-items-center'>
            <div style='width:100%; height:35%; position: absolute; top:0; background-color: black; opacity:.5;'></div>
            <img style='position:relative;' src="img/about/pencil.png" alt="">
            <h1 style='position:relative; color:white;'><b>Character Design<br>Competition</b></h1>
        </div>
        <div style='margin: 0 15%; width:70%;'>
            <div class="row">
                <div class="col" style='margin: 0 3%'>
                    <img src="img/about/chardes1.png" style='width:100%; aspect-ratio:1/1;' alt="">
                    <h1 style='text-align:center; color:gold;'><b>1<sup>st</sup> Place</b></h1>
                    <h3 style='text-align:center; color:white;'>Rp. 500.000</h3>
                </div>
                <div class="col" style='margin: 0 3%'>
                    <img src="img/about/chardes2.png" style='width:100%; aspect-ratio:1/1;' alt="">
                    <h1 style='text-align:center; color: white;'><b>2<sup>nd</sup> Place</b></h1>
                    <h3 style='text-align:center; color:white;'>Rp. 250.000</h3>
                </div>
                <div class="col" style='margin: 0 3%'>
                    <img src="img/about/chardes3.png" style='width:100%; aspect-ratio:1/1;' alt="">
                    <h1 style='text-align:center; color: brown;'><b>3<sup>rd</sup> Place</b></h1>
                    <h3 style='text-align:center; color:white;'>Rp. 125.000</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Competitions -->


<script>
    let items = document.querySelectorAll('.carousel .carousel-item')

    items.forEach((el) => {
        const minPerSlide = 3
        let next = el.nextElementSibling
        for (var i = 1; i < minPerSlide; i++) {
            if (!next) {
                // wrap carousel by using first child
                next = items[0]
            }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
        }
    })
</script>