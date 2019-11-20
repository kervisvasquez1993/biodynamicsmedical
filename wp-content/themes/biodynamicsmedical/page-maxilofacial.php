<?php
/*
 * Template Name: maxilofacial
 */
get_header();?>
<div class="item active responsive">

        <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid" alt="Responsive image">

</div>


<div class="container">
       <span> <a href="<?php the_field('url-home');?>">Home</a> /
       <a href="<?php the_field('url-divisiones');?>">Divisiones</a> /
       <a href="<?php the_field('url-maxilofacial');?>">Maxilofacial</a></span>

    <div class="row">
        <?php $arg= array(
            'post_type' => 'maxilofacial',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order'=> 'ASC' );
        $maxilofacial= new WP_Query($arg);
        while($maxilofacial->have_posts()): $maxilofacial->the_post();?>
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
        <?php endwhile; ?>
    </div>
</div>





<?php get_footer();?>

