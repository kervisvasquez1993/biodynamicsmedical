<?php get_header();?>
<?php
    $pagina_blog = get_option('page_for_posts');
    $imagen = get_post_thumbnail_id($pagina_blog);
    $imagen = wp_get_attachment_image_src($imagen, 'full');
?>
<div class="corousel-inner" role="listbox">
    <div class="item active responsive">
        <img src="<?php echo $imagen[0];?>" class="img-fluid" alt="Responsive image">
    </div>
</div>

<div class="conatiner">
    <div class="row row-centered">

        <?php if(have_posts()): while(have_posts()): the_post(); ?>

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="main-items">
                <div class="col-centered">
                    <a href="<?php the_field('enlaces_division')?>">
                        <img src="<?php the_post_thumbnail_url();?>" alt="imagen destacada">
                    </a>
                </div>

            </div>
        </div>
        <?php endwhile;?>
        <?php endif;?>

    </div>
</div>
<?php get_footer();?>
