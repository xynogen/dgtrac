<?= $this->include("header") ?>

<body>
    <?= $this->include("navbar") ?>
    <div class="container">
        <div class="text-center my-4">
            <h1>Tentang Kami</h1>
        </div>

        <ul class="list-group">
            <li class="list-group-item my-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-lg-row flex-column">
                            <img src="assets/img/<?= $tentang[0]['foto'] ?>" alt="" class="mx-3 my-2 my-avatar">
                            <div class="d-flex flex-column mx-2 my-auto">
                                <h3 class="display-6 my-2 mx-auto">
                                    <strong>
                                        <?= $tentang[0]['nama'] ?>
                                    </strong>
                                </h3>
                                <p class="fs-5 mx-auto">
                                    <?= $tentang[0]['tentang'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
    <footer class="mt-5 py-5 bg-dark">
        <div class="container">
            <div class="col-12">
                <p class="m-0 text-center text-white">Copyright© 2022 DG-Trac</p>
            </div>
        </div>
    </footer>
</body>