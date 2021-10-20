<?= $this->extend('template/template'); ?>

<?= $this->section('content'); ?>

<!-- Start Main Site -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url() . '/emas.jpeg'; ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
        </div>
    </div>
</div>
<!-- Start Main Site -->
<?= $this->endSection(); ?>