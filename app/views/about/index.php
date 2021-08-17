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
<h1 class="mt-4">About ICF</h1>
<div class="container-fluid p-0 text-center my-3">
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