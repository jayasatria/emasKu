<?= $this->extend('template/template'); ?>

<?= $this->section('content'); ?>

<!-- Start Main Site -->
<div class="container">
    <!-- Banner -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url() . '/emas.jpeg'; ?>" class="d-block w-100" alt="Banner1">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url() . '/giftSeries.jpeg'; ?>" class="d-block w-100" alt="Banner2">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url() . '/marchendise.jpeg'; ?>" class="d-block w-100" alt="Banner3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Banner -->

    <!-- emasMini -->
    <section class="emasMini">
        <div class="container py-5">
            <h4 class="font-rubik">Emas Mini</h4>
            <hr>
            <!-- owl Carousel -->
            <?php
            foreach ($emasMini as $item) :
            ?>
                <div class="owl-carousel owl-theme">
                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="<?= base_url() . '/' . $item['nama_gambar']; ?>" alt="Product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6><?= $item['variant']; ?> gr</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- owl carousel -->
        </div>
    </section>
    <!-- emasMini -->
</div>
<!-- Start Main Site -->
<?= $this->endSection(); ?>