   
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
                        $key = 0;
                        $key_item = 0;
                ?>
                    <div class="row desktop-content">
                        <div class="col-4 tabs" id="tabs-voices-by-size">
                            <ul>
                                <?php foreach($voices_by_size['items'] as $tab): $key++; ?>
                                    <li class="<?php if($key === 1): ?>active<?php endif; ?>">
                                        <a href="item-<?= $key; ?>" class="tab-item">
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
                            <?php foreach($voices_by_size['items'] as $item): $key_item++; ?>
                                <div class="body-item this-item-<?= $key_item; ?> <?php if($key_item === 1): ?>active<?php endif; ?>">
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
                                items:1
                            }).css({'opacity':1});
                        </script>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>              