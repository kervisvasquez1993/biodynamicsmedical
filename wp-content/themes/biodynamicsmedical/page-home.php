<?php get_header();?>
    <div class="corousel-inner" role="listbox">
        <div class="item active responsive">
            <?php while(have_posts()): the_post(); ?>
                <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid" alt="Responsive image">

        </div>
        <?php endwhile;?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-centered col-sm-12 col-lg-12">
                <p>
                    <?php the_content();?>
                </p>


                <div class="page-header text-center">
                    <h3>Linea de productos</h3>
                </div>

                <div class="flex-dinamics">
                    <div class="info-card center-block">
                        <div class="front">
                            <img src="<?php the_field('img-biodynamic');?>" alt=" img biodinamics">
                        </div>
                        <div class="back bio-text">
                            <h4 class="h2">Dynamics Linea</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, ipsa.
                                <a href="<?php the_field('url_biodynamicsmedical');?>">Leer más</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>



<?php get_footer();?>