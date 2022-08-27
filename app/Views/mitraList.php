<?= $this->include("header") ?>

<body>
    <?= $this->include("navbar") ?>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center mb-5">
                    <h1>Mitra</h1>
                </div>

                <?php foreach ($mitras as $mitra) : ?>

                    <div class="card mb-5">
                        <div class="row my-5">
                            <div class="col-lg-3 col-md-12">
                                <img class="img-fluid my-avatar mt-4 mx-auto d-block" src="assets/img/<?= $mitra['logo'] ?>" style="width: 200px;">
                            </div>

                            <div class="col-lg-8">
                                <h3 class="display-5 mt-2 mb-5 text-center">
                                    <?= $mitra['nama'] ?>
                                    <i class="bi bi-check-circle-fill text-primary"></i>
                                </h3>
                                <a href="/mitra/<?= $mitra['id'] ?>" class="stretched-link"></a>
                                <p class="fs-5 mx-2"><?= $mitra['alamat'] ?></p>

                                <ol class="list-group list-group-numbered my-4">
                                    <?php
                                    foreach ($catatans as $catatan) {
                                        if ($catatan['id_mitra'] == $mitra['id']) {
                                            echo '<li class="list-group-item">' . $catatan['catatan'] . '</li>';
                                        }
                                    }
                                    ?>
                                </ol>

                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>
        </div>
    </div>
    <footer class="py-5 bg-dark">
        <div class="container">
            <div class="col-12">
                <p class="m-0 text-center text-white">Copyright© 2022 DG-Trac</p>
            </div>
        </div>
    </footer>
</body>