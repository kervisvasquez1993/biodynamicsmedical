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

    );

    $trauma= new WP_Query($arg);
    while($trauma->have_posts()): $trauma->the_post();?>





    <?php endwhile; wp_resert_postdata();?>

<h1>hola</h1>

<?php get_footer();?>