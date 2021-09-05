<style>
    div.desc {
        background-image: url("<?= BASECSS; ?>/img/home/bgvideo.jpg");
        background-size: cover;
    }

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

        .row.timeline-img {
            width: 100%;
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

        .row.timeline-img {
            width: 85%;
        }

        .desc {
            height: 100vh;
        }

        div.video-desc {
            width: 100%;
            height: 50vh;
        }


    }

    .carousel-inner .carousel-item-end,
    .carousel-inner .carousel-item-start {
        transform: translateX(0);
    }


    @media (min-height: 1366px) {


        .desc,
        .desc .row,
        .row .col-lg-5,
        .desc .row .col-lg-6 {
            display: block !important;
            width: auto;
        }

        .row .col-lg-1,
        .row .utub div.w-25 {
            display: none !important;
        }

        .video-desc h1 {
            font-size: 100px !important;
        }

        .video-desc p {
            font-size: 25px !important;
        }
    }

    @media (min-width: 992px) {
        .video-desc h1 {
            font-size: 4vw;
        }

        .video-desc p {
            font-size: 1vw;
        }

        div.video-desc,
        .utub {
            height: 40vh;
        }
    }
</style>

<!-- START OF HERO -->
<div class="h-auto" style='width:100%; position:relative;'>
    <div style="text-align:right; position: relative;">
        <img src="<?= BASECSS; ?>/img/home/hero-main.jpg" alt="" style="width:70%;">
        <div class='h-100 ' style="width:100%; position: absolute; top:0; left:0;
            background: rgb(239, 236, 231);
            background: linear-gradient(90deg, rgba(239, 236, 231,1) 0%, rgba(239, 236, 231,1) 43%, rgba(239, 236, 231,0.6699054621848739) 56%, rgba(239, 236, 231,0) 75%, rgba(239, 236, 231,0) 100%);">
        </div>
    </div>
    <div class='h-100 d-flex justify-content-center container' style='position: absolute; top:0; align-items:flex-start !important; flex-direction: column; margin-left: 15%; width:auto;'>
        <img src="img/home/welcome.png" style='height:40%;' alt="">
    </div>
</div>
<!-- END OF HERO -->

<!-- START OF VIDEO DESCRIPTION -->
<div class="desc d-lg-flex align-items-center">
    <div class="row">
        <div class="col-lg-1">
            <div class="d-none d-md-block" style='height: 100%; background:#efece7;box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;'></div>
        </div>
        <div class="col-lg-6">
            <div class="text-center p-3 video-desc">
                <h1 class="display-1 text-light">INTO THE UNNAMED LAND</h1>
                <p class="h6 text-light">Di tahun 2020 kemarin, seluruh masyarakat Indonesia diwajibkan untuk melakukan segala aktivitas di rumah saja.
                    Perubahan yang drastis tersebut membuat beberapa orang tertekan dan sulit untuk beradaptasi. Di tengah ketidakpastian serta hal-hal baru,
                    tidak sedikit orang yang diwajibkan untuk membuat sebuah metode baru untuk menghadapi era asing yang baru ini. Banyak kegiatan sekarang beralih menjadi online.
                    ICF kali ini mengangkat tema "Into The Unnamed Land" yang terinspirasi dari lingkungan sekitar sekarang ini. Dari segi Informatika hingga Multimedia,
                    masyarakat di era baru seperti sekarang ini harus keluar dari zona nyaman dan mempelajari skill-skill yang dibutuhkan seperti
                    penggunaan platform online untuk proses belajar-mengajar, pemanfaatan platform digital untuk menyampaikan suatu pekerjaan,
                    bahkan hingga skill basic seperti cara mengoperasikan software akan sangat diperlukan.</p>
            </div>
        </div>
        <div class="col-lg-5 d-flex utub">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/aK33uXl_qzo" title="YouTube video" allowfullscreen></iframe>
            </div>
            <div class="d-none d-lg-block w-25" style='height: 100%; background:#efece7;box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;'></div>
        </div>
    </div>
</div>
<!-- END OF VIDEO DESCRIPTION -->

<!-- START OF TIMELINE -->
<div style='height: 30vh; width:100%; background:#efece7;'>
    <div style='position:relative; display: flex; top: 170px; left: 22%; width:fit-content;'>
        <img src="<?= BASECSS; ?>/img/home/dotted.png" width="25px" height="25px" style="margin-top: 12px;" alt="">
        <h1 style="margin-left: 15px;"><b>Timeline</b></h1>
    </div>
</div>
<div class="w-100 d-flex justify-content-between">
    <div class="d-none d-md-block" style="height: auto; width: 5%; background: rgb(1, 151, 148)"></div>
    <div class="row timeline-img w-100">
        <div class="col-md-6 d-sm-block d-md-flex align-items-center" style="background:#efece7;">
            <style>
                ul.timeline {
                    list-style-type: none;
                    position: relative;
                }

                .linetimeline {
                    content: ' ';
                    background: #0582BC;
                    display: inline-block;
                    position: absolute;
                    left: 29px;
                    width: 1px;
                    height: 100%;
                    z-index: 400;
                }

                ul.timeline>li {
                    padding: 20px 0 25px 0;
                    padding-left: 20px;
                }

                ul.timeline>li:before {
                    content: ' ';
                    background: #efece7;
                    display: inline-block;
                    position: absolute;
                    border-radius: 50%;
                    border: 1px solid #0582BC;
                    left: -27px;
                    width: 35px;
                    height: 35px;
                    z-index: 400;
                }
            </style>
            <div class=" container">
                <div class="ms-md-5 mt-md-5 ms-3 mt-3 me-2">
                    <ul class="timeline">
                        <li style='position:relative;'>
                            <div style='width:1px; height:100%; background-color:#0582BC; display:inline-block; position:absolute; left:-10px;'></div>
                            <div style='position:relative;'>
                                <svg style="position:relative;" height='30px' data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 133.18 25.18">
                                    <polygon class="cls-1" fill='#0582BC' points="0 12.32 13.29 0 133.18 0 133.18 25.18 13.5 25.18 0 12.32" />
                                </svg>
                                <p style='position:absolute; color: white; top: -5px; left: 30px; font-size:x-large;'>
                                    20 Sep '21
                                </p>
                            </div>
                            <div style='margin-left:2.5%;'>
                                <h3><b>Lorem Ipsum</b></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et </p>
                            </div>
                        </li>
                        <li style='position:relative;'>
                            <div style='width:1px; height:100%; background-color:#0582BC; display:inline-block; position:absolute; left:-10px;'></div>
                            <div style='position:relative;'>
                                <svg style="position:relative;" height='30px' data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 133.18 25.18">
                                    <polygon class="cls-1" fill='#0582BC' points="0 12.32 13.29 0 133.18 0 133.18 25.18 13.5 25.18 0 12.32" />
                                </svg>
                                <p style='position:absolute; color: white; top: -5px; left: 30px; font-size:x-large;'>
                                    20 Sep '21
                                </p>
                            </div>
                            <div style='margin-left:2.5%;'>
                                <h3><b>Lorem Ipsum</b></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et </p>
                            </div>
                        </li>
                        <li style='position:relative;'>
                            <div style='position:relative;'>
                                <svg style="position:relative;" height='30px' data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 133.18 25.18">
                                    <polygon class="cls-1" fill='#0582BC' points="0 12.32 13.29 0 133.18 0 133.18 25.18 13.5 25.18 0 12.32" />
                                </svg>
                                <p style='position:absolute; color: white; top: -5px; left: 30px; font-size:x-large;'>
                                    20 Sep '21
                                </p>
                            </div>
                            <div style='margin-left:2.5%;'>
                                <h3><b>Lorem Ipsum</b></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 d-none d-md-block">
            <img src="<?= BASECSS; ?>/img/home/poster.png" style='height:100%; width:100%;' alt="">
        </div>
    </div>
    <div class="d-none d-md-block" style="height: auto; width: 10%; background: rgb(1, 151, 148); background: linear-gradient(90deg, rgba(1, 151, 148, 1) 0%, rgba(5, 132, 187, 1) 100%)"></div>
</div>
<div style='height: auto; width:100%;'>
    <img style='width:100%; aspect-ratio: 1920/366; pointer-events: none;' src='img/home/vectorline.jpg'>
</div>
<!-- END OF TIMELINE -->

<!-- START OF LOCATION -->
<div class="mapouter">
    <div class="bg-location d-flex justify-content-center align-items-center">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="90px" height="90px;" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;fill:#f36f25" xml:space="preserve">
            <g>
                <g>
                    <path d="M256,0C161.896,0,85.333,76.563,85.333,170.667c0,28.25,7.063,56.26,20.49,81.104L246.667,506.5
                        c1.875,3.396,5.448,5.5,9.333,5.5s7.458-2.104,9.333-5.5l140.896-254.813c13.375-24.76,20.438-52.771,20.438-81.021
                        C426.667,76.563,350.104,0,256,0z M256,256c-47.052,0-85.333-38.281-85.333-85.333c0-47.052,38.281-85.333,85.333-85.333
                        s85.333,38.281,85.333,85.333C341.333,217.719,303.052,256,256,256z" />
                </g>
            </g>
        </svg>
        <div>
            <h1 style="font-weight:bold;color:#efece7;font-family:'Circular Std Bold';font-size: 5rem;">Universitas Surabaya</h1>
            <p style="color:#efece7;line-height:50%;font-size:13px;font-family:'Circular Std Thin'">Jl. Raya Rungkut, Kali Rungkut, Kec. Rungkut, Kota SBY, Jawa Timur 60293</p>
        </div>

    </div>
    <div class="gmap-outer">
        <div class="gmap_canvas">
            <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Universitas%20Surabaya&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://123movies-to.org"></a><br>
            <style>
                .mapouter {
                    width: 100%;
                    background: rgb(1, 151, 148);
                    background: linear-gradient(90deg, rgba(1, 151, 148, 1) 0%, rgba(5, 132, 187, 1) 100%);
                }
            </style>
            <style>
                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 100%;
                    width: 100%;
                    padding-left: 10%;
                    padding-right: 10%;
                }
            </style>
            <style>
                .bg-location {
                    width: 100%;
                    height: 150px;
                }
            </style>
            <style>
                .gmap-outer {
                    width: 100%;
                    height: 600px;
                }
            </style>
        </div>
    </div>
</div>
<!-- END OF LOCATION -->

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