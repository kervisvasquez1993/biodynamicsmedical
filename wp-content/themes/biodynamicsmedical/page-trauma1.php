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
    <div class="row">
        <?php $arg= array(
            'post_type' => 'trauma',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order'=> 'ASC' );
        $trauma= new WP_Query($arg);
        while($trauma->have_posts()): $trauma->the_post();?>
            <div class="card" style="width: 18rem;">
                <img src="<?php the_post_thumbnail_url()?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php the_title();?></h5>
                    <p><h1>hola desde test</h1></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        <?php endwhile; wp_resert_postdata();?>
    </div>
</div>





<?php get_footer();?>

