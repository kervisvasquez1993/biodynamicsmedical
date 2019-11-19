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
            <div class="col-md-4 col-centered col-sm-12 col-lg-4">

                <p>
                    <?php the_content();?>
                </p>




                <!-- <div class="flex-dinamics">
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
                </div> -->
            </div>

            <div class="col-md-8 col-centered col-sm-12 col-lg-8">
                <div class="page-header text-center">
                    <h3 class="linea-biodynamics"><?php the_field('lineaProductos');?>  <img src="<?php  echo get_template_directory_uri();?>/img/biodynamics.jpg" alt="biodynamics"> </h3>

                </div>
                <div class="row row-centered">
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="main-items">
                        <div class="hovereffect col-centered">
                            <img class="img-responsive" src="<?php the_field('img-card-trauma');?>" alt="">
                            <div class="overlay text-center">
                                <h2>
                                    <a href="<?php the_field('url-trauma');?>">
                                        Trauma
                                    </a>
                                </h2>
                                <a class="info" href="<?php the_field('url-trauma');?>">
                                    click here
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <div class="main-items">
                            <div class="hovereffect col-centered">
                                <img class="img-responsive" src="<?php the_field('img-card-columna');?>" alt="">
                                <div class="overlay text-center">
                                    <h2>
                                        <a href="<?php the_field('url-columna')?>">
                                            COLUMNA
                                        </a>
                                    </h2>
                                    <a class="info" href="<?php the_field('url-columna')?>">
                                        click here
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="main-items">
                        <div class="hovereffect col-centered">
                            <img class="img-responsive" src="<?php the_field('img-card-maxilof');?>" alt="">
                            <div class="overlay text-center">
                                <h2>
                                    <a href="<?php the_field('url-maxilofacial ')?>">
                                        MAXILOFACIAL
                                    </a>
                                </h2>
                                <a class="info" href="<?php the_field('url-maxilofacial')?>">
                                    click here
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <div class="main-items">
                            <div class="hovereffect col-centered">
                                <img class="img-responsive" src="<?php the_field('img-card-otros-productos');?>" alt="">
                                <div class="overlay text-center">
                                    <h2>
                                        <a href="<?php the_field('url-otros-productos')?>">
                                            OTROS PRODUCTOS
                                        </a>
                                    </h2>
                                    <a class="info" href="<?php the_field('url-otros-productos')?>">
                                        click here
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            </div>
            </div>
        </div>
    </div>




<?php get_footer();?>