<?php
/*
 * Template Name: columna
*/
get_header();?>

<div class="item active responsive">

        <img src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid img-responsive" alt="Responsive image">

</div>
<div class="container">
    <div class="row">
        <?php $arg= array(
            'post_type' => 'columna',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order'=> 'ASC',
            'category_name' => 'columna');
            $columna = new WP_Query($arg);
                while($columna->have_posts()): $columna->the_post();?>
                    <div class="col-xs-6 col-sm-4 col-lg-4">
                        <div class="thumbnail ">
                            <img src="<?php the_field('imagen_principal_producto');?>" alt="...">
                            <div class="caption product-description">
                                <h4><?php the_title();?></h4>
                                <p class="intro">
                                    <?php the_excerpt();?>
                                </p>
                                <hr>
                                <a class="link-detail" href="<?php the_permalink();?>">
                                    <?php the_field('leermas');?>
                                </a>
                            </div>
                        </div>
                    </div>
        <?php endwhile; ?>


    </div>
</div>





<?php get_footer();?>

