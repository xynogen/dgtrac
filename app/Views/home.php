<?= $this->include("header") ?>


<body>
    <?= $this->include("navbarHome") ?>
    <?= $this->include("carouselHome") ?>
    <?= $this->include("frontPage") ?>

    <div class="container pt-5">
        <div class="col-md-12 text-center">
            <h1>Temukan Makanan Terdekat</h1>
            <p>Temukan Makanan Tradisional favorit disekitar kalian</p>
        </div>
    </div>

    <?= $this->include("bottomBanner") ?>

    <div class="text-center mb-5 mt-3">
        <a href="/produk" class="btn btn-dark">Lihat Semua</a>
    </div>

    <footer class="mt-5 py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright© 2022 DG-Trac</p>
        </div>
    </footer>
</body>