<?php
/**
 * Block: M06 - Page Header
 *
 * @used:
 *  - Gutenberg
 *
 * @package Jafar_Theme
 */

$heading    = get_field( 'm06_title' );
$bg_img     = get_field( 'm06_bg_img' );
$image_attr = is_admin() ? 'src=' . $bg_img['url'] : 'data-src=' . $bg_img['url'];
?>

<section class="m06 break-out" >
		<?php if ( $heading ) : ?>
			<div class="container">
				<h1 class="m06__title">
					<?php echo esc_html( $heading ); ?>
				</h1>
			</div>
		<?php endif; ?>

	<?php if ( $bg_img ) : ?>
		<div class="m06__img">
			<img class="lazy m06__img__media object-fit" <?php echo esc_attr( $image_attr ); ?> alt="<?php echo esc_attr( $image['alt'] ); ?>">
		</div>
	<?php endif; ?>
</section>
