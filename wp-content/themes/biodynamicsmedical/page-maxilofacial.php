<?php
/*
 * Template Name: maxilofacial
 */
get_header();?>
<div class="item active responsive" id="maxilo">

        <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid" alt="Responsive image">

</div>


<div class="container" id="vue-max">
      <span class="ruta-interna abel">
       <a href="<?php the_field('url-home');?>" class="black"><?php the_field('inicio_palabra')?></a> /
       <a href="<?php the_field('url-divisiones');?>" class="black"><?php the_field('divisiones_palabra');?></a> /
       <a href="<?php the_field('url-columna');?>" class="here"><?php the_field('maxilofacial_palabra')?></a>
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
            'post_type' => 'maxilofacial',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order'=> 'ASC' );
        $maxilofacial= new WP_Query($arg);
        while($maxilofacial->have_posts()): $maxilofacial->the_post();?>
            <div class="col-xs-6 col-sm-4 col-lg-4"  v-show="<?php the_field('render-maxilofacial');?>">
                <div class="thumbnail ">
                    <img src="<?php the_field('imagen_principal_producto');?>" alt="...">
                    <div class="caption product-description">
                        <h4><?php the_title();?></h4>
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
        <?php endwhile; ?>
    </div>
</div>





<?php get_footer();?>

