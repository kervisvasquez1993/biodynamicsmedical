<?php
/*
 * Template Name: otros_productos
 */
get_header();?>
<div class="item active responsive">

        <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid" alt="Responsive image">

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
            <div class="card" style="width: 18rem;">
                <img src="<?php the_post_thumbnail_url()?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php the_title();?></h5>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>





<?php get_footer();?>


