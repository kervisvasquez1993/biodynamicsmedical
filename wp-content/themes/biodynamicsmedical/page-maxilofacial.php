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
           <a href="<?php the_field('url-home');?>" class="black">Home</a> /
           <a href="<?php the_field('url-divisiones');?>" class="black">Divisions</a> /
           <a href="<?php the_field('url-maxilofacial');?>" class="here">Maxilofacial</a>
       </span>
    <div>
        <span v-on:click="showCategoriaTotal" class="categoria oxygen btn btn-outline-secondary">Todas las categorias</span>
        <span v-on:click="showCategoria1" class="categoria oxygen btn btn-outline-secondary">Maxilofacial1</span>
        <span v-on:click="showCategoria2" class="categoria oxygen btn btn-outline-secondary">Maxilofacial2</span>
        <span v-on:click="showCategoria3" class="categoria oxygen btn btn-outline-secondary">Maxilofacial</span>
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

