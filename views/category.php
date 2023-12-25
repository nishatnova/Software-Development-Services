<?php include 'header.php'; ?>
<section class="py-5 bg-secondary-subtle">
    <div class="container">
        <div class="row">
            <?php foreach ($services as $service) { ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo $service['image']; ?>" alt="" height="330" class="card-img-top bg-primary-subtle"/>

                        <div class="card-body">
                            <h4> <?php echo $service['name']; ?></h4>
                            <p><?php echo $service['description']; ?></p>
                            <hr/>
                            <a href="action.php?page=service&&id=<?php echo $service['id']; ?>" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>

