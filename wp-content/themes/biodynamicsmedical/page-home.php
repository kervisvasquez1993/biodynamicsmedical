<?php get_header();?>
    <div class="corousel-inner" role="listbox">
        <div class="item active responsive">
            <?php while(have_posts()): the_post(); ?>
                <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid" alt="Responsive image">

        </div>
        <?php endwhile;?>
    </div>
    <div>
        <span> <a href="<?php the_field('url-home');?>">Home</a> /</span>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-centered col-sm-12 col-lg-12">
                <p>
                    <?php the_content();?>
                </p>


                <div class="page-header text-center">
                    <h3><?php the_field('lineaProductos');?></h3>
                </div>

                <div class="flex-dinamics">
                    <div class="info-card center-block">
                        <div class="front">
                            <img src="<?php the_field('img-biodynamic');?>" alt=" img biodinamics">
                        </div>
                        <div class="back bio-text">
                            <h4 class="h2"><?php the_field('linea_Dinamics');?></h4>
                              <p><?php the_field('dinamics_descripcion');?>
                                <a href="<?php the_field('url_biodynamicsmedical');?>"><?php the_field('leer_mas');?></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

<center>
<h1>test de font para la pagina</h1>
   <h1 class="releweay">relaweays</h1>
    <h1 class="Oxygen">Oxygen</h1>
    <h1 class="abel"> abel</h1>
    <h1 class="NewsCycle"> NewsCycle</h1>
</center>


<?php get_footer();?>