<?php
  /*
  Template Name: division
  */

    $arg= array(
                    'post_type' => 'divisions',
                    'posts_per_page' => -1
                );
    $division = new WP_Query($arg);
    get_header();
    ?>
<div class="coriusel-inner" role="listbox">
    <div class="item active responsive">
        <img src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid" alt="">
    </div>
</div>
<div class="container">
    <span class="ruta-interna abel">
        <a href="<?php the_field('url-home');?>" class="black">Inicio</a> /
        <a href="<?php the_field('url-divisiones');?>" class="here"> Divisiones</a>
        <a href="<?php the_field('url-divisiones');?>" class="here"></a>
    </span>



    </div>
</div>
<div class="container">
    <div class="row row-centered">
    <?php
        while($division->have_posts()): $division->the_post();
        ?>
        <div class="col-lg-4 col-md-4 colsm-6 col-xs-12">
            <div class="main-items">
                <div class="hovereffect col-centered">
                    <img class="img-responsive" src="<?php the_post_thumbnail_url('small')?>" alt="">
                        <div class="overlay text-center">
                            <h2>
                                <p class="oxygen"><?php the_title();?></p>
                            </h2>
                            <a href="<?php the_field('enlaces_division');?>" class="info oxygen">click</a>
                        </div>
                </div>
            </div>
        </div>
        <?php endwhile;?>
    </div>

</div>
<?php get_footer();?>