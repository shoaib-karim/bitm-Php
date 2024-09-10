<?php include 'includes/header.php' ?>


<section>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2200">
        <div class="carousel-inner">
            <?php foreach ($sliders as $key => $slider) : ?>
                <div class="carousel-item <?= $key == 0 ? 'active' : ''; ?>">
                    <img src="<?= $slider['img']; ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5> <?= $slider['title'] ?> </h5>
                        <p><?= $slider['description'] ?></p>
                        <a href="route.php?page=detail&&id=<?= $slider['id']; ?>" class="btn btn-danger">Read More >></a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section>
    <div class="container">
        <div class="row my-5">
            <?php foreach ($products as $product) : ?>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $product['image']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product['title'] ?></h5>
                            <p class="card-text"><?= $product['description'] ?></p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php' ?>