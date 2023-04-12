<?php
/**
 * Block: M06 - Page Header
 *
 * @used:
 *  - Gutenberg
 *
 * @package Jafar_Theme
 */

$heading = get_field( 'm06_title' );
$leader  = get_field( 'm06_leader' );
?>

<section class="m06 break-out" >
	<?php if ( $heading ) : ?>
		<div class="container">
			<h1 class="m06__title">
				<?php echo esc_html( $heading ); ?>
			</h1>

			<?php if ( $leader ) : ?>
				<p class="m06__leader h4"><?php echo esc_html( $leader ); ?></p>
			<?php endif; ?>
		</div>
	<?php endif; ?>
</section>
