   
<?php
/**
 * 
 * Partial Name: how-to-hire-it
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$cta = get_field('request_advice', 'option');
?>
<section class="how-to-hire-it-partial-117e5e">
    <div class="container">
        <div class="row">
            <div class="col-12 card-purple">
                <h2><?= get_field('how_to_hire_it_title', 'option'); ?></h2>
                <p><?= get_field('how_to_hire_it_description', 'option'); ?></p>
                <a href="<?= $cta['url']; ?>" target="<?= $cta['target']; ?>">
                    <span><?= $cta['title']; ?></span>
                </a>
            </div>
        </div>
    </div>
</section>
                    