<?= $this->include("header") ?>

<body>
    <?= $this->include("navbarHome") ?>
    <?= $this->include("carouselHome") ?>

    <div class="container">
        <div class="row" style="margin-bottom: 15%;">
            <div class="col-md-12 justify-content-center">
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="col-12">
                            <h3 class="display-6 mx-4 text-center">
                                <?= $banners[0]["name"] ?>
                            </h3>
                            <h3 class="fs-5 mx-4 text-center">
                                Rp. <?= $banners[0]["harga"] ?>,-/<?= $banners[0]["satuan"] ?>
                            </h3>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mt-3 mb-5 d-flex justify-content-center">
                            <div style="margin-right: 10px;">
                                <a href="<?= $banners[0]['lokasi'] ?>" target="_blank" class="btn btn-dark"><i class="bi bi-geo-alt"></i></a>
                            </div>
                            <a href="<?= $banners[0]['kontak'] ?>" class="btn btn-dark"><i class="bi bi-person-lines-fill"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card mx-auto" style="width: 18rem; box-shadow: 1px 1px 10px rgb(77, 77, 77);">
                        <img src="/assets/img/<?= $banners[0]['logo'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $banners[0]["nama"] ?><i class="bi bi-check-circle-fill text-primary"></i></h5>
                        </div>
                        <a href="/mitra/<?= $banners[0]['id']?>" class="stretched-link"></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <footer class="py-4 bg-dark my-footer">
        <div class="container">
            <div class="col-12">
                <p class="m-0 text-center text-white">Copyright© 2022 DG-Trac</p>
            </div>
        </div>
    </footer>

</body>