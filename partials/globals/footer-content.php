   
<?php
/**
 * 
 * Partial Name: footer-content
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$social_networks = get_field('social_networks', 'options');
?>
<section class="footer-content-partial-7e1adc">
    <div class="container">
        <div class="row">
            <div class="col-5 col-md-8 p-0">
                <div class="logo-contain">
                    <img src="<?= esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt="Neivor logo" class="logo-footer">
                </div>
            </div>
            <div class="col-7 col-lg-4 p-0">
                <?php if($social_networks): ?>
                    <ul class="social-networks">
                        <?php foreach($social_networks as $item): ?>
                            <li>
                                <a href="<?= $item['url']; ?>" target="_blank">
                                    <?= $item['fontawesome_icon']; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="col-12 p-0">
                <div class="nav-policies">
                    <?php wp_nav_menu(['menu'=>'Footer']); ?>
                </div>
            </div>
            <div class="col-12 p-0">
                <div class="copy-right-and-addres-contain">
                    <div class="address">
                        <p><?= get_field('address', 'option'); ?></p>
                    </div>
                    <div class="copy-right">
                        <p><?= get_field('copyright', 'option'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
                    