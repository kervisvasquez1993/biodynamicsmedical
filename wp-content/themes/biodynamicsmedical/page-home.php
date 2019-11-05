<?php get_header();?>
    <div class="corousel-inner" role="listbox">
        <div class="item active responsive">
            <?php while(have_posts()): the_post(); ?>

                <img src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid" alt="Responsive image">
            <?php endwhile;?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum deleniti esse necessitatibus numquam reiciendis! Adipisci consequuntur dolorum, excepturi fugiat optio perferendis placeat, quam ratione rerum
                    similique sint sit unde veritatis.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, eos expedita impedit ipsum maiores, nam nihil non officiis quas recusandae repellendus vero vitae! Architecto fugit in nam nobis, quidem quos.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores beatae consequuntur delectus, dolore, dolorum eos eum exercitationem fugiat incidunt laborum odit omnis optio quasi recusandae suscipit, ut? Ratione, rem.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto at cupiditate delectus enim facere facilis laborum quis. Fuga illo incidunt ipsam magnam molestiae, necessitatibus quos reiciendis repellat repellendus voluptatem!
                </p>
                <div class="page-header text-center">
                    <h3>Linea de productos</h3>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="info-card center-block">
                        <div class="front">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/dinamics.jpeg" alt="">
                        </div>
                        <div class="back">
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



<?php get_footer();?>