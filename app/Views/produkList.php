<?= $this->include("header") ?>

<body>
    <?= $this->include("navbar") ?>
    <div class="container">
        <div class="text-center my-4">
            <h1>Produk</h1>
        </div>

        <?php
        $i = 0;
        $jumlahData = count($dataProduk);
        $row = intval($jumlahData / 4);
        $endCol = $jumlahData - $row * 4;
        $index = 0;
        ?>

        <?php for ($i = 0; $i < $row; $i++) : ?>
            <div class="d-flex flex-column flex-lg-row flex-warp justify-content-between">
                <?php for ($j = 0; $j < 4; $j++) : ?>
                    <div class="container mx-2">
                        <div class="row mb-5">
                            <a class="text-decoration-none text-dark" href="produk/<?= $dataProduk[$index]['id_banner'] ?>">
                            </a>
                            <div class="card h-100"><a class="text-decoration-none text-dark" href="produk/<?= $dataProduk[$index]['id_banner'] ?>">
                                    <img class="card-img-top" src="assets/img/<?= $dataProduk[$index]['image'] ?>">
                                </a>
                                <div class="card-body px-4"><a class="text-decoration-none text-dark" href="produk/<?= $dataProduk[$index]['id_banner'] ?>">
                                    </a>
                                    <div class="text-center"><a class="text-decoration-none text-dark" href="produk/<?= $dataProduk[$index]['id_banner'] ?>">
                                            <div class="d-flex justify-content-around">
                                                <h5 class="w-100 fw-bolder"><?= $dataProduk[$index]['name'] ?></h5>
                                            </div>
                                            <div class="fs-5 mb-3">
                                                Rp. <?= $dataProduk[$index]['harga'] ?>,-/<?= $dataProduk[$index]['satuan'] ?>
                                            </div>
                                        </a>
                                        <div>
                                            <a class="text-decoration-none text-dark" href="produk/<?= $dataProduk[$index]['id_banner'] ?>">
                                                <a href="<?= $dataProduk[$index]['lokasi'] ?>" target="_blank" class="btn btn-dark"><i class="bi bi-geo-alt"></i></a>
                                                <a href="<?= $dataProduk[$index]['kontak'] ?>" class="btn btn-dark"><i class="bi bi-person-lines-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    $index++;
                endfor ?>
            </div>
        <?php endfor ?>

        <div class="d-flex flex-column flex-lg-row flex-warp justify-content-between">
            <?php for ($j = 0; $j < $endCol; $j++) : ?>
                <div class="container mx-2">
                    <div class="row mb-5">
                        <a class="text-decoration-none text-dark" href="produk/<?= $dataProduk[$index]['id_banner'] ?>">
                        </a>
                        <div class="card h-100"><a class="text-decoration-none text-dark" href="produk/<?= $dataProduk[$index]['id_banner'] ?>">
                                <img class="card-img-top" src="assets/img/<?= $dataProduk[$index]['image'] ?>">
                            </a>
                            <div class="card-body px-4"><a class="text-decoration-none text-dark" href="produk/<?= $dataProduk[$index]['id_banner'] ?>">
                                </a>
                                <div class="text-center"><a class="text-decoration-none text-dark" href="produk/<?= $dataProduk[$index]['id_banner'] ?>">
                                        <div class="d-flex justify-content-around">
                                            <h5 class="w-100 fw-bolder"><?= $dataProduk[$index]['name'] ?></h5>
                                        </div>
                                        <div class="fs-5 mb-3">
                                            Rp. <?= $dataProduk[$index]['harga'] ?>,-/<?= $dataProduk[$index]['satuan'] ?>
                                        </div>
                                    </a>
                                    <div>
                                        <a class="text-decoration-none text-dark" href="produk/<?= $dataProduk[$index]['id_banner'] ?>">
                                            <a href="<?= $dataProduk[$index]['lokasi'] ?>" target="_blank" class="btn btn-dark"><i class="bi bi-geo-alt"></i></a>
                                            <a href="<?= $dataProduk[$index]['kontak'] ?>" class="btn btn-dark"><i class="bi bi-person-lines-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $index++;
            endfor ?>

            <?php
            $padding = 0;
            if ($endCol == 0) {
                $padding = 0;
            } else {
                $padding = 4 - $endCol;
            }

            for ($j = 0; $j < $padding; $j++) : ?>
                <div class="container mx-2"></div>
            <?php endfor ?>
        </div>
    </div>

    
    <footer class="mt-5 py-5 bg-dark">
        <div class="container">
            <div class="col-12">
                <p class="m-0 text-center text-white">Copyright© 2022 DG-Trac</p>
            </div>
        </div>
    </footer>
</body>