<?= $this->include("header") ?>

<body>
    <?= $this->include("navbar") ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center my-4">
                    <h1>Tentang Kami</h1>

                    <ul class="list-group">
                        <li class="list-group-item my-2">
                            <div class="card my-card">
                                <div class="card-body">
                                    <div class="d-flex flex-lg-row flex-column">
                                        <img src="assets/img/<?= $tentang[0]['foto'] ?>" alt="" class="mx-3 mx-auto img-fluid min-vw-75 my-avatar">
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <footer class="mt-5 py-5 bg-dark my-footer">
        <div class="container">
            <div class="col-12">
                <p class="m-0 text-center text-white">Copyright© 2022 DG-Trac</p>
            </div>
        </div>
    </footer>

</body>