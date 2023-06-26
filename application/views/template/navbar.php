<?php $currentPage = isset($currentPage) ? $currentPage : " "  ?>
<!-- jumbotron -->
<div class="jumbotron-fluid pt-2" style="margin-bottom: 0; background: #f0f3f7; ">
    <div class="container">
        <div class="row">
            <div class="col-md-2 justify-content-center">
                <img src="<?= base_url('assets/img/logo.png') ?>" class="rounded img-fluid" alt="logo" />
            </div>
            <div class="col-md-9 text-center">
                <h1 class="display-3">Motorfiets Rijders Club</h1>
                <p class="lead">Selamat Datang Rijders, Stay Santuy Be Santun</p>
            </div>
        </div>
    </div>
</div>
<!-- end jumbotron -->

<!-- nav -->
<nav class="nav nav-pills flex-column flex-sm-row navbar-light" style="background-color: #f0f3f7">
    <a href="<?= base_url('mrc'); ?>" class="flex-sm-fill text-sm-center nav-link <?= $currentPage == "home" ? "active" : "" ?>">Home</a>
    <a href="<?= base_url('mrc/profil'); ?>" class="flex-sm-fill text-sm-center nav-link <?= $currentPage == "profil" ? "active" : "" ?>">Profil</a>
    <a href="<?= base_url('mrc/visi_misi'); ?>" class="flex-sm-fill text-sm-center nav-link <?= $currentPage == "visi_misi" ? "active" : "" ?>">Visi & Misi</a>
    <a href="<?= base_url('mrc/produk'); ?>" class="flex-sm-fill text-sm-center nav-link <?= $currentPage == "produk" ? "active" : "" ?>">Produk</a>
    <a href="<?= base_url('mrc/sejarah'); ?>" class="flex-sm-fill text-sm-center nav-link <?= $currentPage == "sejarah" ? "active" : "" ?>">Sejarah Singkat</a>
    <a href="<?= base_url('mrc/kontak'); ?>" class="flex-sm-fill text-sm-center nav-link <?= $currentPage == "kontak" ? "active" : "" ?>">Kontak</a>
</nav>
<!-- end nav -->