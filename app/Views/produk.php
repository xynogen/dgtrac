<?= $this->include("header") ?>

<body>
    <?= $this->include("navbarHome") ?>

    <div class="container-fluid" style="padding: 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <?= $this->include("carousel") ?>
                </div>

                <div class="row mt-5">
                    <div class="d-flex flex-row justify-content-around" id="btn-buy">
                        <div class="flex-column">
                            <h3 class="display-6 mx-4 text-center">
                                <?= $banners[0]["name"] ?>
                            </h3>
                            <h3 class="fs-5 mx-4">
                                Rp. <?= $banners[0]["harga"] ?>,-/<?= $banners[0]["satuan"] ?>
                            </h3>
                        </div>
                        <div class="mt-3 mb-5">
                            <a href="<?= $banners[0]['lokasi'] ?>" target="_blank" class="btn btn-dark"><i class="bi bi-geo-alt"></i></a>
                            <a href="<?= $banners[0]['kontak'] ?>" class="btn btn-dark"><i class="bi bi-person-lines-fill"></i></a>
                        </div>
                    </div>

                    <footer class="mt-5 py-5 bg-dark">
                        <div class="container">
                            <div class="col-12">
                                <p class="m-0 text-center text-white">Copyright© 2022 DG-Trac</p>

                            </div>
                        </div>
                    </footer>
                </div>
            </div>

        </div>
    </div>



</body>