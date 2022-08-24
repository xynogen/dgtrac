<?php shuffle($frontpages); ?>
<div class="container px-4  mt-4">
    <div class="d-flex flex-column flex-lg-row justify-content-center pt-lg-4">
        <a href="produk/<?=$frontpages[0]['id']?>" class="btn">
            <div class="img-fluid" style="background-size:cover; background-image: url(assets/img/<?=$frontpages[0]['image']?>); background-position: center; width: 550px;">
                <div class="d-flex align-items-center p-5" style="background: rgba(0,0,0,0.4); background-size:cover; height:83vh;">
                    <div class="d-block text-white">
                        <h3 class="display-3">
                            <?=$frontpages[0]['name']?>
                        </h3>
                    </div>
                </div>
            </div>
        </a>

        <div class="d-flex flex-column justify-content-between">
            <a href="produk/<?=$frontpages[1]['id']?>" class="btn">
                <div class="img-fluid" style="background-size:cover; background-image: url(assets/img/<?=$frontpages[1]['image']?>); background-position: center; width: 380px;">
                    <div class="d-flex align-items-center p-5" style="background: rgba(0,0,0,0.4); background-size:cover; height:40vh;">
                        <div class="d-block text-white">
                            <h3 class="display-5">
                                <?=$frontpages[1]['name']?>
                            </h3>
                        </div>
                    </div>
                </div>
            </a>

            <a href="produk/<?=$frontpages[2]['id']?>" class="btn">
                <div class="img-fluid" style="background-size:cover; background-image: url(assets/img/<?=$frontpages[2]['image']?>); background-position: center; width: 380px;">
                    <div class="d-flex align-items-center p-5" style="background: rgba(0,0,0,0.4); background-size:cover; height:40vh;">
                        <div class="d-block text-white">
                            <h3 class="display-5">
                                <?=$frontpages[2]['name']?>
                            </h3>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>