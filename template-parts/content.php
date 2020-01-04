<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Invitaciones_Digitales
 */

?>

<?php if ( is_singular() ) : ?>
<?php else : ?>
	
	<div class="col-12 col-md-4">
		<figure class="text-center">
			<a href='<?php the_permalink(); ?>' title='<?php the_title_attribute(); ?>' rel='bookmark'>
				<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid w-100 shadow-hover']); ?>
			</a>
			<figcaption class="py-2">
				<a href='<?php the_permalink(); ?>' title='<?php the_title_attribute(); ?>' rel='bookmark'><?php the_title(); ?></a>
			</figcaption>
		</figure>
	</div>

<?php endif; ?>

<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> -->

	<!-- <header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				invitaciones_posted_on();
				invitaciones_posted_by();
				?>
			</div>
		<?php endif; ?>
	</header>

	<?php invitaciones_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		if ( is_single()){
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'invitaciones' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
		} else {
			the_excerpt();
		}

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'invitaciones' ),
			'after'  => '</div>',
		) );
		?>
	</div> -->

<!-- </article> --><!-- #post-<?php the_ID(); ?> -->
