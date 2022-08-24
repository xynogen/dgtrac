<?php shuffle($banners); ?>
<div id="carouselExampleCaptions" class="carousel slide my-carousel" data-bs-ride="false">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

        <?php for ($i = 1; $i < count($banners); $i++) : ?>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i ?>" aria-label="Slide <?= $i + 1 ?>"></button>
        <?php endfor ?>

    </div>
    <div class="carousel-inner">
        <?php for ($i = 0; $i < count($banners); $i++) : ?>
            <div class="carousel-item <?= ($i == 0) ? "active" : ""; ?> ">
                <?php $image_name = "assets/img/" . $banners[$i]["image"]; ?>
                <img src="<?php echo base_url($image_name); ?>" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 20px;">"<?= $banners[$i]["name"] ?>"</h5>
                    <p style="font-size: 15px;"><?= $banners[$i]["description"] ?></p>
                </div>
                
            </div>
        <?php endfor ?>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>