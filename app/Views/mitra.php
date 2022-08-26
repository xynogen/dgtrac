<?= $this->include("header") ?>


<body>
    <?= $this->include("navbar") ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <img src="/assets/img/<?= $mitra[0]['logo']; ?>" class="img-fluid my-avatar d-block mx-auto" style="width: 400px;">
                <h1 class="text-center">
                    <?= $mitra[0]['nama']; ?>
                    <i class="bi bi-check-circle-fill text-primary"></i>
                    <div class="mt-3 mb-5">
                        <a href="<?= $mitra[0]['lokasi'] ?>" target="_blank" class="btn btn-dark"><i class="bi bi-geo-alt"></i></a>
                        <a href="<?= $mitra[0]['kontak'] ?>" class="btn btn-dark"><i class="bi bi-person-lines-fill"></i></a>
                    </div>
                </h1>
                <ol class="list-group list-group-numbered my-4 text-center">
                    <?php
                    foreach ($catatan as $catat) {
                        echo '<li class="list-group-item">' . $catat['catatan'] . '</li>';
                    }
                    ?>
                </ol>

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
                                    <a class="text-decoration-none text-dark" href="/produk/<?= $dataProduk[$index]['id_banner'] ?>">
                                    </a>
                                    <div class="card h-100"><a class="text-decoration-none text-dark" href="/produk/<?= $dataProduk[$index]['id_banner'] ?>">
                                            <img class="card-img-top" src="/assets/img/<?= $dataProduk[$index]['image'] ?>">
                                        </a>
                                        <div class="card-body px-4"><a class="text-decoration-none text-dark" href="/produk/<?= $dataProduk[$index]['id_banner'] ?>">
                                            </a>
                                            <div class="text-center"><a class="text-decoration-none text-dark" href="/produk/<?= $dataProduk[$index]['id_banner'] ?>">
                                                    <div class="d-flex justify-content-around">
                                                        <h5 class="w-100 fw-bolder"><?= $dataProduk[$index]['name'] ?></h5>
                                                    </div>
                                                    <div class="fs-5 mb-3">
                                                        Rp. <?= $dataProduk[$index]['harga'] ?>,-/<?= $dataProduk[$index]['satuan'] ?>
                                                    </div>
                                                </a>
                                                <div>
                                                    <a class="text-decoration-none text-dark" href="/produk/<?= $dataProduk[$index]['id_banner'] ?>">
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
                                <a class="text-decoration-none text-dark" href="/produk/<?= $dataProduk[$index]['id_banner'] ?>">
                                </a>
                                <div class="card h-100"><a class="text-decoration-none text-dark" href="/produk/<?= $dataProduk[$index]['id_banner'] ?>">
                                        <img class="card-img-top" src="/assets/img/<?= $dataProduk[$index]['image'] ?>">
                                    </a>
                                    <div class="card-body px-4"><a class="text-decoration-none text-dark" href="/produk/<?= $dataProduk[$index]['id_banner'] ?>">
                                        </a>
                                        <div class="text-center"><a class="text-decoration-none text-dark" href="/produk/<?= $dataProduk[$index]['id_banner'] ?>">
                                                <div class="d-flex justify-content-around">
                                                    <h5 class="w-100 fw-bolder"><?= $dataProduk[$index]['name'] ?></h5>
                                                </div>
                                                <div class="fs-5 mb-3">
                                                    Rp. <?= $dataProduk[$index]['harga'] ?>,-/<?= $dataProduk[$index]['satuan'] ?>
                                                </div>
                                            </a>
                                            <div>
                                                <a class="text-decoration-none text-dark" href="/produk/<?= $dataProduk[$index]['id_banner'] ?>">
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
        </div>
    </div>

</body>