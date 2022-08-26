<?= $this->include("header") ?>


<body>
    <?= $this->include("navbarHome") ?>
    <?= $this->include("carouselHome") ?>

    <div class="container pt-3">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>
                    Anda Adalah Pengunjung Ke
                </h2>
                <?php
                $digits = array();
                $num = $counter;
                for ($i = 0; $i < 6; $i++) {
                    $mod = $num % 10;
                    array_push($digits, $mod);
                    $num = intval($num / 10);
                }
                ?>
                <div class="row my-5">
                    <?php for ($i = 0; $i < 6; $i++) : ?>
                        <div class="col-2 card bg-dark py-5">
                            <h1 class="text-white">
                                <?= $digits[5-$i] ?>
                            </h1>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </div>
    </div>
    </div>

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