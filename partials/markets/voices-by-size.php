   
<?php
/**
 * 
 * Partial Name: voices-by-size
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
if(get_field('enable_voices_by_size')):
    $voices_by_size = get_field('voices_by_size');
?>
<section class="voices-by-size-partial-07bb70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title"><?= $voices_by_size['title']; ?></h2>
                <p class="introduction"><?= $voices_by_size['introduction']; ?></p>
            </div>
            <div class="col-12">
                <?php 
                    if($voices_by_size['items']): 
                        $key = -1;
                        $key_item = -1;
                ?>
                    <div class="row desktop-content">
                        <div class="col-4 tabs" id="tabs-voices-by-size">
                            <ul>
                                <?php foreach($voices_by_size['items'] as $tab): $key++; ?>
                                    <li class="item-tab-<?= $key; ?> <?php if($key === 0): ?>active<?php endif; ?>">
                                        <a href="<?= $key; ?>" class="tab-item">
                                            <div class="icon">
                                                <img src="<?= $tab['icon']['url']; ?>" alt="<?= $tab['icon']['title']; ?>">
                                            </div>
                                            <div class="texts">
                                                <span class="name"><?= $tab['name']; ?></span>
                                                <span class="units"><?= $tab['units']; ?></span>
                                            </div>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="col-8 body-tab">
                            <div class="owl-carousel" id="slide-desktop">
                                <?php foreach($voices_by_size['items'] as $item): $key_item++; ?>
                                    <div class="body-item this-item-<?= $key_item; ?>">
                                        <input type="hidden" class="position-item" value="<?= $key_item; ?>">
                                        <div class="description-contain">
                                            <p class="description"><?= $item['descriptions']; ?></p>
                                            <div class="end-content">
                                                <span><?= $item['address']; ?></span>
                                                <span><?= $item['units']; ?></span>
                                            </div>
                                        </div>
                                        <div class="image-contain">
                                            <img src="<?= $item['photo']['url']; ?>" alt="<?= $item['photo']['title']; ?>">
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="movil-content">
                        <div class="slide-voices owl-carousel">
                            <?php foreach($voices_by_size['items'] as $item): ?>
                                <div class="item">
                                    <div class="tab-item">
                                        <div class="icon">
                                            <img src="<?= $item['icon']['url']; ?>" alt="<?= $item['icon']['title']; ?>">
                                        </div>
                                        <div class="texts">
                                            <span class="name"><?= $item['name']; ?></span>
                                            <span class="units"><?= $item['units']; ?></span>
                                        </div>
                                    </div>
                                    <div class="body-item">
                                        <div class="description-contain">
                                            <p class="description"><?= $item['descriptions']; ?></p>
                                            <div class="end-content">
                                                <span><?= $item['address']; ?></span>
                                                <span><?= $item['units']; ?></span>
                                            </div>
                                        </div>
                                        <div class="image-contain">
                                            <img src="<?= $item['photo']['url']; ?>" alt="<?= $item['photo']['title']; ?>">
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <script>
                            $('.slide-voices').owlCarousel({
                                autoplay:true,
                                loop:true,
                                nav:false,
                                dots:true,
                                margin:10,
                                items:1,
                            }).css({'opacity':1});
                            $('#slide-desktop').owlCarousel({
                                autoplay:true,
                                loop:true,
                                nav:false,
                                dots:true,
                                margin:10,
                                items:1,
                            }).on('translated.owl.carousel', function(event) {
                                var position = $('#slide-desktop .owl-item.active .position-item').val();
                                $('#tabs-voices-by-size ul li').removeClass('active');
                                $('#tabs-voices-by-size ul .item-tab-'+position).addClass('active');
                            }).css({'opacity':1});
                        </script>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>              