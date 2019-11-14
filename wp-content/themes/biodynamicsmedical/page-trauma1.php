<?php
/*
 *
 * Template Name: trauma
 *
 */
get_header();?>
<div class="item active responsive">

        <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid" alt="Responsive image">

</div>
<div class="container">
    <div class="flex-row row">
        <?php $arg= array(
            'post_type' => 'trauma',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order'=> 'ASC' );
        $trauma= new WP_Query($arg);
        while($trauma->have_posts()): $trauma->the_post();?>
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
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        <?php endwhile;?>
        </div>
    </div>

    </div>
</div>





<?php get_footer();?>

