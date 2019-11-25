<?php get_header();?>
    <div class="corousel-inner" role="listbox">
        <div class="item active responsive">
            <?php while(have_posts()): the_post(); ?>
                <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid" alt="Responsive image">

        </div>
        <?php endwhile;?>
    </div>
    <div>


    </div>
    <br><br><br>
    <div class="container">

        <div class="row">

            <div class="col-md-4 col-centered col-sm-12 col-lg-4 NewsCycle paddin-top">
                <?php the_content();?>
            </div>

            <div class="col-md-8 col-centered col-sm-12 col-lg-8">
                <div class="page-header text-center">
                    <h3 class="linea-biodynamics oxygen"><?php the_field('lineaProductos');?> </h3>

                </div>
                <div class="row row-centered">
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="main-items">
                        <div class="hovereffect col-centered">
                            <img class="img-responsive" src="<?php the_field('img-card-trauma');?>" alt="">
                            <div class="overlay text-center">
                                <h2>
                                    <a href="<?php the_field('url-trauma');?>" class="oxygen">
                                        Trauma
                                    </a>
                                </h2>
                                <a class="info oxygen" href="<?php the_field('url-trauma');?>" >
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
                                        <a href="<?php the_field('url-columna')?>" class="oxygen">
                                            COLUMNA
                                        </a>
                                    </h2>
                                    <a class="info oxygen" href="<?php the_field('url-columna')?>">
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
                                    <a href="<?php the_field('url-maxilofacial ')?>" class="oxygen">
                                        MAXILOFACIAL
                                    </a>
                                </h2>
                                <a class="info oxygen" href="<?php the_field('url-maxilofacial')?>" >
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
                                        <a href="<?php the_field('url-otros-productos')?>" class="oxygen">
                                            OTROS PRODUCTOS
                                        </a>
                                    </h2>
                                    <a class="info oxygen" href="<?php the_field('url-otros-productos')?>" class="oxygen">
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