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
<div class="card" style="width: 18rem;">


</div>
<div class="conatiner">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">

            </div>
        </div>
    </div>
<!--
     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="main-items">
                <div class="hovereffect col-centered">
                    <img class="img-responsive" src="<?/*php the_post_thumbnail_url('small');*/?>" alt="imagen destacada">
                </div>
                <div class="overlay text-center">
                    <h2>
                        <?php /* the_title() */;?>
                    </h2>
                    <a class="info" href="<?php /* the_field('enlaces_division') */?>">Ver más</a>
                </div>

            </div>
        </div>
-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                </div>
            </div>
        </div>
        <div class="row row-centered">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="main-items">
                        <div class="hovereffect col-centered">
                            <img class="img-responsive" src="<?php the_post_thumbnail_url('small');?>" alt="">
                            <div class="overlay text-center">
                                <h2>
                                    <a href="<?php the_field('enlaces_division')?>">
                                        <?php the_title();?>
                                    </a>
                                </h2>
                                <a class="info" href="<?php the_field('enlaces_division')?>">
                                    click here
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

        <?php endwhile;?>
        <?php endif;?>

    </div>
        </div>
</div>
<?php get_footer();?>
