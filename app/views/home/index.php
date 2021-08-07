<style>
    @media (max-width: 767px) {
        .carousel-inner .carousel-item>div {
            display: none;
        }

        .carousel-inner .carousel-item>div:first-child {
            display: block;
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
    }

    .carousel-inner .carousel-item-end,
    .carousel-inner .carousel-item-start {
        transform: translateX(0);
    }
</style>
<h1 class="mt-4">Welcome to ICF</h1>

<!-- <?php foreach ($data[''] as $key) : ?>

<?php endforeach; ?> -->
<div class="container-fluid p-0 text-center my-3">
    <h2 class="font-weight-light">Bootstrap Multi Slide Carousel</h2>
    <div class="row my-auto justify-content-center">

        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner position-relative" role="listbox" style="z-index: 1;">
                <div class="position-absolute " style="background-color: blue; width: 33.33vw; opacity: .25; height: 100%; z-index: 10000;"></div>
                <div class="position-absolute " style="right:0; background-color: blue; width: 33.33vw; opacity: .25; height: 100%; z-index: 10000;"></div>

                <div class="carousel-item active">
                    <div class="col-md-4">
                        <div class="card" style="border-radius: 0px;">
                            <img src="//via.placeholder.com/500x400/31f?text=1" class="img-fluid">
                            <div class="card-img-overlay">Slide 1</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="//via.placeholder.com/500x400/e66?text=2" class="img-fluid">
                            <div class="card-img-overlay">Slide 2</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="//via.placeholder.com/500x400/7d2?text=3" class="img-fluid">
                            <div class="card-img-overlay">Slide 3</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="//via.placeholder.com/500x400?text=4" class="img-fluid">
                            <div class="card-img-overlay">Slide 4</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="//via.placeholder.com/500x400/aba?text=5" class="img-fluid">
                            <div class="card-img-overlay">Slide 5</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="//via.placeholder.com/500x400/fc0?text=6" class="img-fluid">
                            <div class="card-img-overlay">Slide 6</div>
                        </div>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                <span class=" carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
    <h5 class="mt-2 fw-light">advances one slide at a time</h5>
</div>

<!-- <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/-Insert_image_here-.svg/1280px--Insert_image_here-.svg.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/-Insert_image_here-.svg/1280px--Insert_image_here-.svg.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/-Insert_image_here-.svg/1280px--Insert_image_here-.svg.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div> -->
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