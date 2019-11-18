<?php get_header();?>

    <section class="error">

        <a href="<?php echo esc_url(home_url('/'));?>" class="text-3d"><?php the_title('<h2>','</h2>')?></a>
        <span class="caption"><?php the_content();?></span>
    </section>




<?php get_footer();?>