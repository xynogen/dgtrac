<div class="container pt-5">
    <div class="d-flex flex-column flex-lg-row flex-warp justify-content-between">
        <?php 
        shuffle($bottomBanners);
        for ($i = 0; $i < 3; $i++) : ?>
                <div class="row mx-2">
                    <div class="card h-100">
                        <a class="text-decoration-none text-dark" href="produk/<?= $bottomBanners[$i]['id_banner'] ?>">
                            <!-- Product image-->
                            <img class="card-img-top img-thumbnail" src="assets/img/<?= $bottomBanners[$i]['image'] ?>">
                            <!-- Product details-->
                        </a>
                        <div class="card-body">
                            <div class="text-center">
                                <a class="text-decoration-none text-dark" href="produk/<?= $bottomBanners[$i]['id_banner'] ?>">
                                    <!-- Product name-->
                                    <div class="d-flex justify-content-around">
                                        <h5 class="fs-3 fw-bolder"><?= $bottomBanners[$i]['name'] ?></h5>
                                    </div>
                                    <div class="fs-5 mb-3">
                                        Rp. <?= $bottomBanners[$i]['harga'] ?>,-/<?= $bottomBanners[$i]['satuan'] ?>
                                    </div>
                                </a>
                                <div>
                                    <a href="<?= $bottomBanners[$i]['lokasi'] ?>" target="_blank" class="btn btn-dark"><i class="bi bi-geo-alt"></i></a>
                                    <a href="<?= $bottomBanners[$i]['kontak'] ?>" class="btn btn-dark"><i class="bi bi-person-lines-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>

        <?php endfor ?>

    </div>
</div>