<?= $this->extend('template/template'); ?>

<?= $this->section('content'); ?>

<!-- Start Main Site -->
<main id="main-site">
    <!-- carousel -->
    <section id="banner-area">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="<?= base_url('/img/ban_3.jpg'); ?>" alt="Banner1">
            </div>
            <div class="item">
                <img src="<?= base_url('/img/ban_2.jpg'); ?>" alt="Banner2">
            </div>
            <div class="item">
                <img src="<?= base_url('/img/ban1.jpg'); ?>" alt="Banner3">
            </div>
        </div>
    </section>
    <!-- carousel -->





</main>
<!-- Start Main Site -->
<?= $this->endSection(); ?>