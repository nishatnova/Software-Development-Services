<?php include 'header.php'; ?>


<div id="slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/b1.jpg" alt="" class="w-100" height="550"/>
        </div>

        <div class="carousel-item">
            <img src="assets/img/b2.jpg" alt="" class="w-100" height="550"/>
        </div>

    </div>

    <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a href="#slider" class="carousel-control-next" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
<section class="py-5 bg-primary-subtle">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="fw-bold text-center text-primary">Welcome to BayTech Software Company!</h1>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-secondary-subtle ">
    <div class="container">
        <div>
            <h2 class="fw-bold text-center text-primary">Our All Services</h2>
        </div>
        <div class="row mt-3">

            <?php foreach ($services as $service) { ?>
                <div class="col-md-4 mb-3">
                    <div class="card shadow">
                        <img src="<?php echo $service['image']; ?>" alt="" class="card-img-top bg-primary-subtle" height="400"/>
                        <div class="card-body">
                            <h4 class=""><?php echo $service['name']; ?></h4>
                            <hr class="text-primary"/>
                            <a href="action.php?page=service&&id=<?php echo $service['id']; ?>" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>


    </div>

</section>

<?php include 'footer.php'; ?>
