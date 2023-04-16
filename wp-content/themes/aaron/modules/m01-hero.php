<?php
/**
 * Block: M01 - Hero
 *
 * @used:
 *  - Gutenberg
 *
 * @package Jafar_Theme
 */

$pre_heading = get_field( 'm01_pre_heading' );
$heading     = get_field( 'm01_heading' );
$leader      = get_field( 'm01_leader' );
$cta         = get_field( 'm01_button' );
$image       = get_field( 'm01_image' );
?>

<section class="module m01 pt--half pb--half break-out">
	<div class="container">
		<div class="m01__grid flex flex-wrap justify-content--space-between align-items--center">
			<div class="m01__grid__text">
				<?php if ( $pre_heading ) : ?>
					<p class="m01__author uppercase h6"><?php echo esc_html( $pre_heading ); ?></p>
				<?php endif; ?>

				<?php if ( $heading ) : ?>
					<h1 class="m01__heading huge">
					<?php echo esc_textarea( $heading ); ?>
					</h1>
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
							<a class="m01__button button button--white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
				</div>
			</div>

			<?php if ( $image ) : ?>
				<?php display_image( $image, 'inline', 'md', 'm01__grid__img' ); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
