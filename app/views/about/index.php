<style>
    .carousel-inner .carousel-item.active,
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
        display: flex;
    }

    .about-text {
        font-family: 'Circular Icf' !important;
    }

    .speaker-list {
        padding: 0 20%;
        background: #efece7 !important;
        margin: 0 !important;
    }

    .speaker-top-title {
        display: flex;
        height: 100%;
        align-items: center;
        padding: 0% 20%;
    }

    .contianer-speaker {
        background: #efece7;
        padding: 120px 0;
    }

    @media only screen and (max-width: 1147px) {
        .speaker-top-title, .speaker-list {
            padding: 0 10%;
        }
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

        .about-intro-section {
            position: relative;
            height: auto;
        }

        .about-judul {
            color: white;
            font-size: 3vw;
        }

        .about-text {
            color: white;
            width: 40%;
            font-size: 1.2vw;
        }

        .div-text {
            width: 100%;
            position: absolute;
            flex-direction: column;
            text-align: center;
            height: 100%;
        }

        .about-hero {
            width: 100%;
        }

        .logo-about-hero {
            width: 3%;
            aspect-ratio: 1/1;
        }
    }

    @media (max-width: 767px) {
        .carousel-inner .carousel-item.active,
        .carousel-inner .carousel-item-next,
        .carousel-inner .carousel-item-prev {
            display: block;
        }

        .carousel-inner .carousel-item>div {
            display: none;
        }

        .carousel-inner .carousel-item>div:first-child {
            display: block;
        }

        .carousel-transparant {
            display: none;
        }

        .about-intro-section {
            position: relative;
            height: auto;
        }

        .about-judul {
            color: white;
            font-size: 9vw;
        }

        .about-text {
            color: white;
            width: 80%;
            font-size: 2vw;
        }

        .div-text {
            width: 100%;
            position: absolute;
            flex-direction: column;
            text-align: center;
            height: 100%;
        }

        .about-hero {
            height: 120vh;
        }

        .logo-about-hero {
            width: 4%;
            aspect-ratio: 1/1;
        }

        .speaker-list {
            margin: 0 !important;
        }

        .speaker-top-title, .speaker-list {
            padding: 0 20%;
        }
    }

    @media only screen and (max-width:  600px) {
        .about-judul {
            font-size: 11vw;
        }
        .about-text {
            font-size: 2.6vw;
        }
        .logo-about-hero {
            width: 5%;
        }
    }

    @media only screen and (max-width:  575px) {
        .about-text {
            font-size: 2.3vw;
        }
        .logo-about-hero {
            width: 4%;
        }
    }

    @media only screen and (max-width:  530px) {
        .about-text {
            font-size: 2.9vw;
        }

        .logo-about-hero {
            width: 5%;
        }
    }

    @media only screen and (max-width:  440px) {
        .about-text {
            font-size: 3vw;
        }

        .about-hero {
            height: 100vh;
        }
    }

    @media only screen and (max-width:  360px) {
        .about-judul {
            font-size: 12vw;
        }

        .about-text {
            font-size: 3.5vw;
        }
    }

    .carousel-inner .carousel-item-end,
    .carousel-inner .carousel-item-start {
        transform: translateX(0);
    }
</style>
<div class='about-intro-section'>
    <div class="div-text d-flex justify-content-center align-items-center">
        <img class='logo-about-hero' src="<?= BASECSS; ?>/img/logoicf.png" alt="">
        <h1 class='about-judul'><b>About ICF</b></h1>
        <p class="about-text">ICF (Informatics Creative Festival) adalah sebuah festival yang memamerkan hasil-hasil karya mahasiswa dari Informatika Universitas Surabaya.
            Tiap tahunnya, ICF mengenalkan desain dan pemrograman melalui pameran karya-karya mahasiswa akhir teknik informatika UBAYA.
            Selain itu, ICF juga ada berbagai macam seminar dan lomba untuk menambah pengetahuan dan mengasah kemampuan para peserta sesuai dengan perkembangan teknologi.</p>
        <br><?php echo (isset($_SESSION['username'])) ? "" : "<a href='" . BASEURL . "/user/login' class='btn btn-outline-light'>Register Now</a>"; ?> 
    </div>
    <img src="<?= BASECSS; ?>/img/hero.jpg" class='about-hero'>
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
                                <div class="card border-0">
                                    <img src="<?= BASECSS; ?>/img/home_<?= $i + 1 ?>.jpg" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card border-0">
                                    <img src="<?= BASECSS; ?>/img/home_<?= $i + 1 ?>.jpg" class="img-fluid">
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

<!-- <div style='height: 24vh; width:100%; background:#efece7;'>
    
</div> -->
<div class="contianer-speaker">
    <div class='speaker-top-title'>
        <img src="<?= BASECSS; ?>/img/dotted.png" width="25px" height="25px" style="margin-bottom: 15px;" alt="">
        <h2 style="margin-left: 20px;"><b>The Speakers</b></h2>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 speaker-list">
        <div class="col">
            <div class="card h-100">
                <div style='position:relative;'> <img src="<?= BASECSS; ?>/img/speaker1.jpg" class="card-img-top" alt="Liliana">
                    <div style="width:100%; height: 50%; position: absolute; bottom: 0; background: linear-gradient(0deg, rgb(000, 000, 000) 0%, rgb(0, 0, 0,30.54353535) 20%, rgba(000, 000, 000,0.1699054621848739) 76%, rgba(000, 000, 000,0) 100%);">
                    </div>
                    <h2 class="card-title speaker-name"><b>Liliana</b></h2>
                </div>
                <div class="card-body" style='background-color: transparent; border: 1px solid rgba(5,132,187,1); text-align:center; border-top:none;'>
                    <p class="card-text">Informatics: Link & Think</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div style='position:relative;'> <img src="<?= BASECSS; ?>/img/speaker2.jpg" class="card-img-top" alt="Fini Charisa">
                    <div style="width:100%; height: 50%; position: absolute; bottom: 0; background: linear-gradient(0deg, rgb(000, 000, 000) 0%, rgb(0, 0, 0,30.54353535) 20%, rgba(000, 000, 000,0.1699054621848739) 76%, rgba(000, 000, 000,0) 100%);">
                    </div>
                    <h2 class="card-title speaker-name"><b>Fini Charisa</b></h2>
                </div>
                <div class="card-body" style='background-color: transparent; border: 1px solid rgba(5,132,187,1); text-align:center; border-top:none;'>
                    <p class="card-text">Digitalize your roadmap through UI/UX</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div style='position:relative;'> <img src="<?= BASECSS; ?>/img/speaker3.jpg" class="card-img-top" alt="Marcellinus Ferdinand Suciadi">
                    <div style="width:100%; height: 50%; position: absolute; bottom: 0; background: linear-gradient(0deg, rgb(000, 000, 000) 0%, rgb(0, 0, 0,30.54353535) 20%, rgba(000, 000, 000,0.1699054621848739) 76%, rgba(000, 000, 000,0) 100%);">
                    </div>
                    <h2 class="card-title speaker-name"><b>Marcellinus Ferdinand Suciadi</b></h2>
                </div>
                <div class="card-body" style='background-color: transparent; border: 1px solid rgba(5,132,187,1); text-align:center; border-top:none;'>
                    <p class="card-text">Dive Into Another World: Anytime, Anywhere, on Your Fingertips</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div style='position:relative;'> <img src="<?= BASECSS; ?>/img/speaker4.jpg" class="card-img-top" alt="Bani Adil">
                    <div style="width:100%; height: 50%; position: absolute; bottom: 0; background: linear-gradient(0deg, rgb(000, 000, 000) 0%, rgb(0, 0, 0,30.54353535) 20%, rgba(000, 000, 000,0.1699054621848739) 76%, rgba(000, 000, 000,0) 100%);">
                    </div>
                    <h2 class="card-title speaker-name"><b>Bani Adil</b></h2>
                </div>
                <div class="card-body" style='background-color: transparent; border: 1px solid rgba(5,132,187,1); text-align:center; border-top:none;'>
                    <p class="card-text">Secret Knowledge of Content Creating</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div style='position:relative;'> <img src="<?= BASECSS; ?>/img/speaker5.jpg" class="card-img-top" alt="Mikhael Ming Khosasih">
                    <div style="width:100%; height: 50%; position: absolute; bottom: 0; background: linear-gradient(0deg, rgb(000, 000, 000) 0%, rgb(0, 0, 0,30.54353535) 20%, rgba(000, 000, 000,0.1699054621848739) 76%, rgba(000, 000, 000,0) 100%);">
                    </div>
                    <h2 class="card-title speaker-name"><b>Mikhael Ming Khosasih</b></h2>
                </div>
                <div class="card-body" style='background-color: transparent; border: 1px solid rgba(5,132,187,1); text-align:center; border-top:none;'>
                    <p class="card-text">So you want to be a Motion Grapher?</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div style='position:relative;'> <img src="<?= BASECSS; ?>/img/speaker6.jpg" class="card-img-top" alt="Ario Anindito">
                    <div style="width:100%; height: 50%; position: absolute; bottom: 0; background: linear-gradient(0deg, rgb(000, 000, 000) 0%, rgb(0, 0, 0,30.54353535) 20%, rgba(000, 000, 000,0.1699054621848739) 76%, rgba(000, 000, 000,0) 100%);">
                    </div>
                    <h2 class="card-title speaker-name"><b>Ario Anindito</b></h2>
                </div>
                <div class="card-body" style='background-color: transparent; border: 1px solid rgba(5,132,187,1); text-align:center; border-top:none;'>
                    <p class="card-text">The Process of Creating a Marvel Comic</p>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    @media (max-width: 767px) {
        .comp-text {
            height: 4%;
            width: 100%;
            position: absolute;
            top: 0;
        }

        .comp-pubg {
            height: 48%;
            width: 100%;
            position: absolute;
            top: 4%;
        }

        .comp-pubg-img {
            height: 15%;
            background: url("<?= BASECSS; ?>/img/pubg.jpg");
            background-size: cover;
        }

        .comp-cd {
            height: 45%;
            width: 100%;
            position: absolute;
            top: 52%;
        }

        .comp-cd-img {
            height: 15%;
            background: url("<?= BASECSS; ?>/img/drawing.jpg");
            background-size: cover;
            background-position: 0% 40%;
        }

        .about-comp-section {
            height: auto;
            width: 100%;
            position: relative;
            display: flex;
        }

        .cover-comp-img {
            width: 100%;
            height: 15%;
            position: absolute;
            top: 0;
            background-color: black;
            opacity: .5;
        }

        .comp-bg {
            height: 100%;
        }

        .speaker-name{
            position:absolute; 
            width:100%; 
            text-align:center; 
            bottom:0; 
            color:#efece7;
            font-size: 5vw;
        }
    }

    /* medium and up screens */
    @media (min-width: 768px) {
        .comp-text {
            height: 12.5%;
            width: 100%;
            position: absolute;
            top: 0;
        }

        .comp-pubg {
            height: 42.5%;
            width: 100%;
            position: absolute;
            top: 12.5%;
        }

        .comp-pubg-img {
            height: 35%;
            background: url("<?= BASECSS; ?>/img/pubg.jpg");
            background-size: cover;
        }

        .comp-cd {
            height: 45%;
            width: 100%;
            position: absolute;
            top: 55%;
        }

        .comp-cd-img {
            height: 35%;
            background: url("<?= BASECSS; ?>/img/drawing.jpg");
            background-size: cover;
            background-position: 0% 40%;
        }

        .about-comp-section {
            height: auto;
            width: 100%;
            position: relative;
        }

        .cover-comp-img {
            width: 100%;
            height: 35%;
            position: absolute;
            top: 0;
            background-color: black;
            opacity: .5;
        }

        .comp-bg {
            width: 100%;
        }

        .speaker-name{
            position:absolute; 
            width:100%;
            text-align:center;
            bottom:0;
            color:#efece7;
            font-size: 2vw;
        }
    }
</style>
<!-- Competitions -->
<div class='about-comp-section'>
    <img src="<?= BASECSS; ?>/img/competition.jpg" class='comp-bg'>
    <div class='d-flex justify-content-center align-items-center comp-text'>
        <h1 style='color:white;'><b>Competitions</b></h1>
    </div>
    <div class='comp-pubg'>
        <div class='d-flex justify-content-center align-items-center comp-pubg-img'>
            <div class='cover-comp-img'></div>
            <img style='position:relative;' src="<?= BASECSS; ?>/img/pubg.png" alt="">
            <h1 style='position:relative; color:white; margin:0;'><b>PUBG Battles</b></h1>
        </div>
        <div style='margin: 0 15%; width:70%;'>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <img src="<?= BASECSS; ?>/img/pubg1.png" style='width:100%; aspect-ratio:1/1;' alt="">
                    <h1 style='text-align:center; color:gold;'><b>1<sup>st</sup> Place</b></h1>
                    <h3 style='text-align:center; color:white;'>Rp. 1.000.000</h3>
                </div>
                <div class="col">
                    <img src="<?= BASECSS; ?>/img/pubg2.png" style='width:100%; aspect-ratio:1/1;' alt="">
                    <h1 style='text-align:center; color: white;'><b>2<sup>nd</sup> Place</b></h1>
                    <h3 style='text-align:center; color:white;'>Rp. 750.000</h3>
                </div>
                <div class="col">
                    <img src="<?= BASECSS; ?>/img/pubg3.png" style='width:100%; aspect-ratio:1/1;' alt="">
                    <h1 style='text-align:center; color: brown;'><b>3<sup>rd</sup> Place</b></h1>
                    <h3 style='text-align:center; color:white;'>Rp. 500.000</h3>
                </div>
            </div>
        </div>
    </div>
    <div class='comp-cd'>
        <div class='d-flex justify-content-center align-items-center comp-cd-img'>
            <div class='cover-comp-img'></div>
            <img style='position:relative;' src="<?= BASECSS; ?>/img/pencil.png" alt="">
            <h1 style='position:relative; color:white; margin:0;'><b>Character Design<br>Competition</b></h1>
        </div>
        <div style='margin: 0 15%; width:70%;'>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <img src="<?= BASECSS; ?>/img/chardes1.png" style='width:100%; aspect-ratio:1/1;' alt="">
                    <h1 style='text-align:center; color:gold;'><b>1<sup>st</sup> Place</b></h1>
                    <h3 style='text-align:center; color:white;'>Rp. 1.000.000</h3>
                </div>
                <div class="col">
                    <img src="<?= BASECSS; ?>/img/chardes2.png" style='width:100%; aspect-ratio:1/1;' alt="">
                    <h1 style='text-align:center; color: white;'><b>2<sup>nd</sup> Place</b></h1>
                    <h3 style='text-align:center; color:white;'>Rp. 750.000</h3>
                </div>
                <div class="col">
                    <img src="<?= BASECSS; ?>/img/chardes3.png" style='width:100%; aspect-ratio:1/1;' alt="">
                    <h1 style='text-align:center; color: brown;'><b>3<sup>rd</sup> Place</b></h1>
                    <h3 style='text-align:center; color:white;'>Rp. 500.000</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Competitions -->


<script>
    let items = document.querySelectorAll('.carousel .carousel-item');

    items.forEach((el) => {
        const minPerSlide = 3;
        let next = el.nextElementSibling;
        for (var i = 1; i < minPerSlide; i++) {
            if (!next) {
                // wrap carousel by using first child
                next = items[0];
            }
            let cloneChild = next.cloneNode(true);
            el.appendChild(cloneChild.children[0]);
            next = next.nextElementSibling;
        }
    });
</script>