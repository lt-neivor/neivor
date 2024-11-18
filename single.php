<?php
/**
 * 
 * Default single.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<main id="ditto-single">
	<?= the_content(); ?>
</main>

<?php get_footer(); ?>