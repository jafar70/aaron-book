<?php
/**
 * Global Modules: GM03 - Footer
 *
 * @used:
 *  - footer.php
 *
 * @package Jafar_Theme
 */

$twitter_url   = get_field( 'twitter_url', 'option' );
$facebook_url  = get_field( 'facebook_url', 'option' );
$linkedin_url  = get_field( 'linkedin_url', 'option' );
$instagram_url = get_field( 'instagram_url', 'option' );
$email         = get_field( 'email_address', 'option' );
?>

<footer class="gm03">
	<div class="gm03__bottom">
		<div class="container flex flex-wrap justify-content--space-between">
			<div class="gm03__bottom__info flex flex-wrap">
				<p><?php echo esc_html( '©' . gmdate( 'Y' ) . ' Aaron.' ); ?></p>
				<?php
				wp_nav_menu(
					array(
						'menu'       => 'bottom-footer',
						'container'  => 'ul',
						'menu_class' => 'gm03__bottom__info__links',
					)
				);
				?>
			</div>

			<div class="gm03__bottom__credits">
				<?php if ( $twitter_url || $facebook_url || $linkedin_url || $email ) : ?>
					<div class="gm03__social">
						<?php if ( $facebook_url ) : ?>
							<a href="<?php echo esc_url( $facebook_url ); ?>" target="_blank" class="gm03__social__link gm03__social__link--facebook">
								<?php get_template_part( 'assets/svg/facebook.svg' ); ?>
							</a>
						<?php endif; ?>

						<?php if ( $twitter_url ) : ?>
							<a href="<?php echo esc_url( $twitter_url ); ?>" target="_blank" class="gm03__social__link gm03__social__link--twitter">
							<?php get_template_part( 'assets/svg/twitter.svg' ); ?>
							</a>
						<?php endif; ?>

						<?php if ( $linkedin_url ) : ?>
							<a href="<?php echo esc_url( $linkedin_url ); ?>" target="_blank" class="gm03__social__link gm03__social__link--linkedin">
								<?php get_template_part( 'assets/svg/linkedin.svg' ); ?>				
							</a>
						<?php endif; ?>

						<?php if ( $instagram_url ) : ?>
							<a href="<?php echo esc_url( $instagram_url ); ?>" target="_blank" class="gm03__social__link gm03__social__link--instagram">
								<?php get_template_part( 'assets/svg/instagram.svg' ); ?>				
							</a>
						<?php endif; ?>

						<?php if ( $email ) : ?>
							<a href="<?php echo esc_attr( 'mailto:' . $email ); ?>" class="gm03__social__link gm03__social__link--linkedin">
								<?php get_template_part( 'assets/svg/email.svg' ); ?>				
							</a>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</footer>
