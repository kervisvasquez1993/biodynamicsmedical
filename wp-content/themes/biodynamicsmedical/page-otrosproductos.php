<?php
/*
 * Template Name: otros_productos
 */
get_header();?>
<div class="item active responsive" id="productos">

        <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid" alt="Responsive image">

</div>


<div class="container" id="vue-product">
   <span class="ruta-interna abel"> <a href="<?php the_field('url-home');?>" class="black"><?php the_field('inicio_palabra')?></a> /
       <a href="<?php the_field('url-divisiones');?>" class="black"><?php the_field('divisiones_palabra');?></a> /
       <a href="<?php the_field('url-columna');?>" class="here"><?php the_field('otros_productos')?></a>
     </span>
    <div class="categoria-padre">
        <span v-on:click="showCategoriaTotal" class="categoria oxygen  btn btn-outline-secondary "><?php the_field('categoria1');?></span>
        <span v-on:click="showCategoria1" class="categoria  oxygen btn btn-outline-secondary "><?php the_field('categoria2');?></span>
        <span v-on:click="showCategoria2" class="categoria  oxygen btn btn-outline-secondary "><?php the_field('categoria3');?></span>
        <span v-on:click="showCategoria3" class="categoria oxygen  btn btn-outline-secondary "><?php the_field('categoria4');?></span>

    </div>
    <div class="center-titulo quincksand" ><h3>{{title}}</h3></div>
    <div class="row">
        <?php $arg= array(
            'post_type' => 'otros_productos',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order'=> 'ASC' );
        $otros_productos= new WP_Query($arg);
        while($otros_productos->have_posts()): $otros_productos->the_post();?>
            <div class="col-xs-6 col-sm-4 col-lg-4" v-show="<?php the_field('render-productos');?>">
                <div class="thumbnail ">
                    <img src="<?php the_field('imagen_principal_producto');?>" alt="...">
                    <div class="caption product-description">
                        <h4><?php the_title();?></h4>
                        <p class="intro">
                            <?php the_excerpt();?>
                        </p>
                        <hr>
                        <a class="link-detail" href="<?php the_permalink();?>">
                           <?php the_field('leer_mas');?>
                        </a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>





<?php get_footer();?>


