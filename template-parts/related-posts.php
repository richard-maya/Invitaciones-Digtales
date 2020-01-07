<?php
/**
 * Template part for displaying related posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Invitaciones_Digitales
 */

?>

<section class="related-templates py-5">
    <div class="container">
        <div class="row text-center">
            <h3 class="blue-pastel-color">Plantillas Similares</h3>
        </div>

        <div class="row">
            <?php 
            $postID = get_the_id();
            $categorySlug = get_the_category();
            $relatedPostsTemplates = get_field('related_posts_templates', 'option');
            $relatedArgsQuery = array(
                'posts_per_page' => $relatedPostsTemplates,
                'nopaging' => false,
                'orderby' => 'rand',
                'category_name' => $categorySlug[0]->name,
                'post__not_in' => array( $postID )
            );


            $relatedPostsQuery = new WP_Query( $relatedArgsQuery );

            if ( $relatedPostsQuery->have_posts() ) : while ( $relatedPostsQuery->have_posts() ) : $relatedPostsQuery->the_post(); ?>
        
                <div class="col-12 col-md-6 col-lg-4 px-2 mx-0">
                    <figure class="text-center">
                        <a href='<?php the_permalink(); ?>' title='<?php the_title_attribute(); ?>' rel='bookmark'>
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid w-100 shadow-hover mb-4']); ?>
                        </a>
                        <figcaption class="py-2">
                            <a href='<?php the_permalink(); ?>' title='<?php the_title_attribute(); ?>' rel='bookmark'><?php the_title(); ?></a>
                        </figcaption>
                    </figure>
                </div>

            <?php endwhile; ?>

            <?php else : ?>
                <p><?php esc_html_e( 'Lo sentimos, no hay plantillas en éste momento.' ); ?></p>
            <?php endif; $relatedPostsQuery->reset_postdata(); ?>
        </div>
    </div>
</section>