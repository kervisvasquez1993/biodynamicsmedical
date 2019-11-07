<?php
/*
 * Template Name: columna
 */
get_header();?>
<div class="item active responsive">
    <?php while(have_posts()): the_post(); ?>
        <img src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid" alt="Responsive image">
    <?php endwhile;?>
</div>
<div class="container">
    <div class="row">
        <?php $arg= array(
            'post_type' => 'columna',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order'=> 'ASC' );
        $columna= new WP_Query($arg);
        while($columna->have_posts()): $columna->the_post();?>
            <div class="card" style="width: 18rem;">
                <img src="<?php the_post_thumbnail_url()?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php the_title();?></h5>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        <?php endwhile; wp_resert_postdata();?>
    </div>
</div>





<?php get_footer();?>

