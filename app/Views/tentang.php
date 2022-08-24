<?= $this->include("header") ?>

<body>
    <?= $this->include("navbar") ?>
    <div class="container">
        <div class="text-center my-4">
            <h1>Tentang Kami</h1>
        </div>

        <ul class="list-group">
            <li class="list-group-item my-2">
                <div class="card my-card">
                    <div class="card-body">
                        <div class="d-flex flex-lg-row flex-column justify-content-center">
                            <img src="assets/img/<?= $tentang[0]['foto'] ?>" alt="" class="mx-3 my-2 img-fluid w-50 my-avatar">
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