<section class="p-4" id="main-content">
    <button class="btn btn-primary" id="button-toggle">
        <i class="bi bi-list-task"></i>
    </button>

    <div class="card mt-5">
        <div class="card-body">
            <h3 class="mb-4">GALERY</h3>
            <div class="container">
                <div class="mySlides">
                    <div class="numbertext">1 / 6</div>
                    <img src="<?= base_url('assets/img/galery/1-1.jpg') ?>" style="height: 525px; width:100%;">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 6</div>
                    <img src="<?= base_url('assets/img/galery/1-2.jpg') ?>" style="height: 525px; width:100%;">
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 6</div>
                    <img src="<?= base_url('assets/img/galery/1-3.jpg') ?>" style="height: 525px; width:100%;">
                </div>

                <div class="mySlides">
                    <div class="numbertext">4 / 6</div>
                    <img src="<?= base_url('assets/img/galery/1-5.jpg') ?>" style="height: 525px; width:100%;">
                </div>

                <div class="mySlides">
                    <div class="numbertext">5 / 6</div>
                    <img src="<?= base_url('assets/img/galery/galery-2.jpeg') ?>" style="height: 525px; width:100%;">
                </div>

                <div class="mySlides">
                    <div class="numbertext">6 / 6</div>
                    <img src="<?= base_url('assets/img/galery/galery-1.jpeg') ?>" style="height: 525px; width:100%;">
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                <div class="caption-container">
                    <p id="caption"></p>
                </div>

                <div class="row">
                    <div class="column">
                        <img class="demo cursor" src="<?= base_url('assets/img/galery/1-1.jpg') ?>" style="height: 128px; width:100%;" onclick=" currentSlide(1)" alt="Sunmori di Pekanbaru">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="<?= base_url('assets/img/galery/1-2.jpg') ?>" style="height: 128px; width:100%;" onclick="currentSlide(2)" alt="Road to Medan">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="<?= base_url('assets/img/galery/1-3.jpg') ?>" style="height: 128px; width:100%;" onclick="currentSlide(3)" alt="Persiapan Sebelum Riding">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="<?= base_url('assets/img/galery/1-5.jpg') ?>" style="height: 128px; width:100%;" onclick="currentSlide(4)" alt="Perayaan 17 Agustus">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="<?= base_url('assets/img/galery/galery-2.jpeg') ?>" style="height: 128px; width:100%;" onclick="currentSlide(5)" alt="Bakti Sosial">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="<?= base_url('assets/img/galery/galery-1.jpeg') ?>" style="height: 128px; width:100%;" onclick="currentSlide(6)" alt="Explore Riau">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>