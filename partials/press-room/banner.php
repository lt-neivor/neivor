   
<?php
/**
 * 
 * Partial Name: banner
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$banner = get_field('banner');
if($banner):
?>
<section class="banner-partial-39c12f">
    <div class="banner-slide owl-carousel">
        <?php foreach($banner as $item): ?>
            <div class="item">
                <img src="<?= $item['image_desktop']['url']; ?>" alt="<?= $item['image_desktop']['title']; ?>" class="desktop">
                <img src="<?= $item['image_movil']['url']; ?>" alt="<?= $item['image_movil']['title']; ?>" class="movil">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="text-contain">
                                <h2><?= $item['title']; ?></h2>
                                <p><?= $item['description']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<script>
    $('.banner-slide').owlCarousel({
        autoplay:true,
        loop:true,
        nav:false,
        dots:true,
        margin:0,
        items:1
    }).css({'opacity':1});
</script>
<?php endif; ?>                 