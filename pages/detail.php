<?php include 'includes/header.php' ?>

<section>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-6">
                <div class="card card-body">
                    <img class="" src="<?= $slider['img'] ?>" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h1><?= $slider['title']; ?></h1>
                    <h1><?= $slider['description']; ?></h1>
                    <h1><?= $slider['price']; ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'includes/footer.php' ?>