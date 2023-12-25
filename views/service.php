<?php include 'header.php' ?>
<section class="py-5 bg-secondary-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body bg-primary-subtle shadow">
                    <img src="<?php echo $service['image']; ?>" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body bg-secondary-subtle border-0">
                    <h1><?php echo $service['name']; ?></h1>
                    <p><?php echo $service['description']; ?></p>
                    <p class="fw-bold text-primary text-muted"><?php echo $service['price']; ?></p>
                    <a href="" class="btn btn-primary">Purchase</a>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php' ?>

