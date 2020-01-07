<?php
/**
 * Template part for displaying related categories
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Invitaciones_Digitales
 */

?>

<div class="row py-4">
    <div class="col-12">
        <h3 class="blue-pastel-color mb-3">Categorías Relacionadas</h3>
    </div>

    <?php if( have_rows('categorias', 1898) ):
        $rows = get_field('categorias', 1898 );
        $rand_rows = array_rand($rows, 3);
        
        for ($x = 0; $x < 3; $x++) { 
            $name_category = $rows[$rand_rows[$x]]['nombre_categoria']; 
            $link_category = $rows[$rand_rows[$x]]['link_categoria']; 
            $image_category = $rows[$rand_rows[$x]]['imagen_categoria'];
            the_row(); ?>

            <div class="col-6 col-md-4 text-center">
                <a href="/category/<?php echo $link_category; ?>" title="invitaciones-digitales-para-<?php echo $name_category; ?>" rel="tag">
                    <?php $image = get_sub_field('imagen_categoria');
                    if( !empty( $image_category ) ): ?>
                        <img src='<?php echo esc_url($image_category['url']); ?>' alt='<?php echo esc_attr($image_category['alt']); ?>' class="img-fluid w-100 mb-2 shadow-hover"/>
                    <?php endif; ?>
                    <h6><?php echo $name_category; ?></h6>
                </a>
            </div>

        <?php }
    else :
        echo '<p>No hay categorías en éste momento.</p>';
    endif; ?>
</div>