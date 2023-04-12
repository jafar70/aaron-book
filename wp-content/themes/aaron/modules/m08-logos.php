<?php
/**
 * Block: M08- Logos
 *
 * @used:
 *  - Gutenberg
 *
 * @package Jafar_Theme
 */

$heading = get_field( 'm08_heading' );
$logos   = get_field( 'm08_logos' );
?>

<section class="m08 break-out" >
	<div class="container align-center">
		<?php if ( $heading ) : ?>
			<h5 class="m08__title uppercase h6">
				<?php echo esc_html( $heading ); ?>
			</h5>
		<?php endif; ?>

		<?php if ( $logos ) : ?>
			<div class="m08__logos">
				<?php foreach ( $logos as $logo ) : ?>
					<?php display_image( $logo, 'inline', 'md', 'm08__logos__img' ); ?>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
