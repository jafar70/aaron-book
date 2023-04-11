<?php
/**
 * Block: M01 - Hero
 *
 * @used:
 *  - Gutenberg
 *
 * @package Jafar_Theme
 */

$author_name   = get_field( 'm01_author_name' );
$heading       = get_field( 'm01_title' );
$subheading    = get_field( 'm01_subtitle' );
$leader        = get_field( 'm01_leader' );
$cta           = get_field( 'm01_button' );
$secondary_cta = get_field( 'm01_secondary_cta' );
$image         = get_field( 'm01_image' );

$size   = 'medium_large';
$thumb  = $image['sizes'][ $size ];
$width  = $image['sizes'][ $size . '-width' ];
$height = $image['sizes'][ $size . '-height' ];

$image_attr = 'data-src=' . $thumb . '';
if ( is_admin() ) {
	$image_attr = 'src=' . $thumb . '';
}

$caption = get_field( 'm01_caption' );
?>

<section class="m01 break-out">
	<div class="container">
		<div class="m01__grid flex flex-wrap justify-content--space-between align-items--center">
			<?php if ( $image ) : ?>
				<div class="m01__grid__img">
					<img <?php echo esc_attr( $image_attr ); ?> alt="<?php esc_attr( $image['alt'] ); ?>" class="lazy" width="<?php echo esc_attr( $width ); ?>" height="<?php echo esc_attr( $height ); ?>">
				</div>
			<?php endif; ?>

			<div class="m01__grid__text">
				<?php if ( $author_name ) : ?>
					<p class="m01__author uppercase h6"><?php echo esc_html( 'By ' . $author_name ); ?></p>
				<?php endif; ?>

				<?php if ( $heading ) : ?>
					<h1 class="m01__heading heading--1">
					<?php echo esc_textarea( $heading ); ?>
					</h1>
				<?php endif; ?>

				<?php if ( $subheading ) : ?>
					<p class="m01__subheading"><?php echo esc_html( $subheading ); ?></p>
				<?php endif; ?>

				<?php if ( $leader ) : ?>
					<p class="m01__leader"><?php echo esc_textarea( $leader ); ?></p>
				<?php endif; ?>

				<div class="m01__buttons">
				<?php
				if ( $cta ) :
						$link_url    = $cta['url'];
						$link_title  = $cta['title'];
						$link_target = $cta['target'] ? $cta['target'] : '_self';
					?>
						<a class="m01__button button button--crail" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>

				<?php
				if ( $secondary_cta ) :
						$link_url    = $secondary_cta['url'];
						$link_title  = $secondary_cta['title'];
						$link_target = $secondary_cta['target'] ? $secondary_cta['target'] : '_self';
					?>
						<a class="m01__button button button--crail" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
				</div>

			</div>
		</div>
	</div>
</section>
