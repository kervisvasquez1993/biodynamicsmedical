<?php
/*
* Template Name: trauma
* Template Post Type: post, page, trauma
*/
get_header();?>

<?php $arg= array(
    'post_type' => 'trauma',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order'=> 'ASC',
    'category_name' => 'trauma');

    $cobertura = new WP_Query($arg);
    while($cobertura->have_posts()): $cobertura->the_post();?>

        <h1><?php the_title(); ?></h1>



    <?php endwhile; wp_resert_postdata();?>

<?php get_footer();?>