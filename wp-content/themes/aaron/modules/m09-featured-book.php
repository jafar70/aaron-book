<?php
/**
 * Block: M09 - Featured Book
 *
 * @used:
 *  - Gutenberg
 *
 * @package Jafar_Theme
 */

$book        = get_field( 'm09_book' );
$preheading  = get_field( 'm09_preheading' );
$heading     = get_field( 'm09_heading' );
$description = get_field( 'm09_description' );
$list_items  = get_field( 'm09_list' );
$cta         = get_field( 'm09_cta' );
?>

<section class="m09 mt mb pt--half pb--half break-out" >
	<div class="container">
		<div class="m09__grid flex flex-wrap justify-content--space-between align-items--center">
			<div class="m09__grid__book">
				<?php
				if ( $book ) :
					$image_id    = get_post_thumbnail_id( $book->ID );
					$img_url     = wp_get_attachment_url( $image_id, 'sm' );
					$image_alt   = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
					$image_title = get_the_title( $image_id );
					$alt_text    = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true );
					$image       = array(
						'sizes' => array( 'sm' => $img_url ),
						'title' => $image_title,
						'alt'   => $alt_text,
					);
					?>
					<?php display_image( $image, 'bg', 'sm', 'm05__portfolio__img' ); ?>
				<?php endif; ?>
			</div>
			<div class="m09__grid__details">
				<?php if ( $preheading ) : ?>
					<h6 class="epsilon uppercase font-reg m09__preheading"><?php echo esc_html( $preheading ); ?></h6>
				<?php endif; ?>

				<?php if ( $heading ) : ?>
					<h2 class="font-reg m09__heading"><?php echo esc_html( $heading ); ?></h2>
				<?php endif; ?>

				<?php if ( $description ) : ?>
					<div class="font-reg m09__description"><?php echo wp_kses_post( $description ); ?></div>
				<?php endif; ?>

				<?php if ( $list_items ) : ?>
					<ul class="font-reg m09__list">
						<?php
						foreach ( $list_items as $list_item ) :
							$text = $list_item['m09_list_item'];
							?>
							<li class="m09__list__item"><?php echo esc_html( $text ); ?></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>

				<?php
				if ( $cta ) :
					$link_url    = $cta['url'];
					$link_title  = $cta['title'];
					$link_target = $cta['target'] ? $cta['target'] : '_self';
					?>
					<a class="m09__button button button--crail" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
