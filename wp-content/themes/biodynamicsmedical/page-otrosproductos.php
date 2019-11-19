<?php
/*
 * Template Name: otros_productos
 */
get_header();?>
<div class="item active responsive">

        <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid" alt="Responsive image">

</div>
<div class="card">
   <span> <a href="<?php the_field('url-home');?>">Home</a> /
       <a href="<?php the_field('url-divisiones');?>">Divisiones</a> /
       <a href="<?php the_field('url-otros-productos');?>">Otros Productos</a></span>
</div>
<div class="container">
    <div class="row">
        <?php $arg= array(
            'post_type' => 'otros_productos',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order'=> 'ASC' );
        $otros_productos= new WP_Query($arg);
        while($otros_productos->have_posts()): $otros_productos->the_post();?>
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


