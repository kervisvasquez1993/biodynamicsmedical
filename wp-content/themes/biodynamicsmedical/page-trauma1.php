<?php
/*
 *
 * Template Name: trauma
 *
 */
get_header();?>
<div class="item active responsive" id="funtionExist">

        <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid" alt="Responsive image">

</div>


<div class="container" id="vue">

<span class="ruta-interna abel">
       <a href="<?php the_field('url-home');?>" class="black">Home</a> /
       <a href="<?php the_field('url-divisiones');?>" class="black">Divisiones</a> /
       <a href="<?php the_field('url-trauma');?>" class="here">Trauma</a> /
</span>
    <div class="ancho"></div>
    <div>
    <span v-on:click="showCategoriaTotal" class="categoria">Todas las categorias</span>
    <span v-on:click="showCategoria1" class="categoria">categoria1</span>
    <span v-on:click="showCategoria2" class="categoria">categoria2</span>
    <span v-on:click="showCategoria3" class="categoria">categoria3</span>
    </div>
    <div >{{title}}</div>
    <div class="flex-row row">

        <?php $arg= array(
            'post_type' => 'trauma',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order'=> 'ASC' );
        $trauma= new WP_Query($arg);
        while($trauma->have_posts()): $trauma->the_post();?>

            <div class="col-xs-6 col-sm-4 col-lg-4" v-show="<?php the_field('test1');?>">
                <div class="thumbnail ">
                    <img src="<?php the_field('imagen_principal_producto');?>" alt="...">
                    <div class="caption product-description NewsCycle">
                        <h4 class="abel"><?php the_title();?></h4>
                        <p class="intro">

                            <?php the_excerpt();?>
                        </p>
                        <hr>
                        <a class="link-detail" href="<?php the_permalink();?>">
                            Read More
                        </a>
                    </div>
                </div>
            </div>


        <?php endwhile;?>
        </div>
    </div>

    </div>
</div>





<?php get_footer();?>

