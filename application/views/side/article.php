<section class="p-4" id="main-content">
    <button class="btn btn-primary" id="button-toggle">
        <i class="bi bi-list-task"></i>
    </button>

    <div class="card mt-5">
        <div class="card-body">
            <h3 class="mb-4">ARTICLE</h3>

            <!-- Carousel -->
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active text-white text-center" data-interval="6000" style="height: 520px;">
                        <img src="<?= base_url('assets/img/article/article-1.jpg') ?>" class="d-block w-100" alt="article image">
                        <div class="card-img-overlay px-2" style=" background: rgba(0, 0, 0, 0.5);">
                            <h1 class="card-title" style="font-size: 70px;">Motorfiets Rijders Club Article</h1>
                            <p class="card-text px-4" style="font-size: 20px;">MRC dibentuk dari rasa kebersamaan. Kegiatan kemanusiaan membantu sesama diperoleh dari penjualan produk MRC.</p>
                            <a href="<?= base_url('mrc/produk'); ?>" class="btn btn-light py-2 px-3">Belanja</a>
                        </div>
                    </div>
                    <div class="carousel-item text-white text-center" data-interval="3000" style="height: 520px;">
                        <img src="<?= base_url('assets/img/article/article-2.jpg') ?>" class="d-block w-100" alt="article image">
                        <div class="card-img-overlay px-2" style=" background: rgba(0, 0, 0, 0.5);">
                            <h1 class="card-title" style="font-size: 70px;">Motorfiets Rijders Club Article</h1>
                            <p class="card-text px-4" style="font-size: 20px;">MRC dibentuk dari rasa kebersamaan. Kegiatan kemanusiaan membantu sesama diperoleh dari penjualan produk MRC.</p>
                            <a href="<?= base_url('mrc/produk'); ?>" class="btn btn-light py-2 px-3">Belanja</a>
                        </div>
                    </div>
                    <div class="carousel-item text-white text-center" style="height: 520px;">
                        <img src="<?= base_url('assets/img/article/article-3.jpg') ?>" class="d-block w-100" alt="article image">
                        <div class="card-img-overlay px-2" style=" background: rgba(0, 0, 0, 0.5);">
                            <h1 class="card-title" style="font-size: 70px;">Motorfiets Rijders Club Article</h1>
                            <p class="card-text px-4" style="font-size: 20px;">MRC dibentuk dari rasa kebersamaan. Kegiatan kemanusiaan membantu sesama diperoleh dari penjualan produk MRC.</p>
                            <a href="<?= base_url('mrc/produk'); ?>" class="btn btn-light py-2 px-3">Belanja</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleInterval" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleInterval" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
            <!-- Carousel end -->

            <!-- Featured -->
            <div class="container-fluid pt-5">
                <div class="row px-xl-5 pb-3">
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                            <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                            <h5 class="font-weight-semi-bold m-0">Kualitas Terjamin</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                            <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                            <h5 class="font-weight-semi-bold m-0">Gratis Ongkir</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                            <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                            <h5 class="font-weight-semi-bold m-0">14-Hari Pengembalian</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                            <h1 class="fas fa-ribbon text-primary m-0 mr-3"></h1>
                            <h5 class="font-weight-semi-bold m-0">Membantu Sesama</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Featured End -->


            <!-- Categories Start -->
            <div class="container-fluid pt-5">
                <div class="row px-xl-5 pb-3">
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class="cat-item d-flex flex-column border mb-4" style="padding: 25px;">
                            <p class="text-right">Produk</p>
                            <a href="<?= base_url('mrc/produk'); ?>" class="cat-img position-relative overflow-hidden mb-3">
                                <img class="img-fluid" src="<?= base_url(); ?>assets/img/article/boy.jpeg" alt="boy">
                            </a>
                            <h5 class="font-weight-semi-bold m-0">Men's collection</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class="cat-item d-flex flex-column border mb-4" style="padding: 25px;">
                            <p class="text-right">Produk</p>
                            <a href="<?= base_url('mrc/produk'); ?>" class="cat-img position-relative overflow-hidden mb-3">
                                <img class="img-fluid" src="<?= base_url(); ?>assets/img/article/girl.jpeg" alt="girl">
                            </a>
                            <h5 class="font-weight-semi-bold m-0">Women's collection</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class="cat-item d-flex flex-column border mb-4 card-img-top" style="padding: 25px;">
                            <p class="text-right">Produk</p>
                            <a href="<?= base_url('mrc/produk'); ?>" class="cat-img position-relative overflow-hidden mb-3">
                                <img class="img-fluid " src="<?= base_url(); ?>assets/img/article/aksesoris.jpeg" alt="aksesoris">
                            </a>
                            <h5 class="font-weight-semi-bold m-0">Accessories</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Categories End -->
        </div>
        <!--  card-body end -->
    </div>
</section>