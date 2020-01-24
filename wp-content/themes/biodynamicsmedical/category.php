<?php get_header();

$list_subcat = array();
$cat;
$the_query = new WP_Query( array( 'cat' => $cat,

                                  'posts_per_page' => 10 ) );
?>
<div class="item active responsive">
    <img src="<?php echo get_template_directory_uri();?>/img/banner-seccion-division.jpg" alt="">
</div>
<div class="container">

     <span class="ruta-interna abel">
       <a href="<?php the_field('url-home');?>" class="black"><?php the_field('inicio_palabra')?></a> /
       <a href="<?php the_field('url-divisiones');?>" class="black"><?php the_field('divisiones_palabra');?></a> /
         <a href="" class="here"><?php the_field('nombre_categoria')?></a>
     </span>

    <?php
    $cat2 = $the_query->query[cat];
    if ( !empty($cat2)):
        $list_subcat = get_categories( ['hide_empty' => false, 'parent' => $cat2] );


    endif;

    if ( count($list_subcat)):?>
    <div class="categoria-padre">
        <?php foreach ($list_subcat as $item_subcat) :
            $category_link = get_category_link( $item_subcat->term_id );
            ?>
            <a class="categoria oxygen btn btn-outline-secondary"
               href=<?php echo $category_link ?>
            ><?php  echo $item_subcat->name ?>
            </a>
        <?php  endforeach ?>
    </div>
<?php
    foreach ($the_query->query as $clave){
        echo "$clave <br>";
    }
?>
    <div class="flex-row row">
        <?php
        endif;
        // En 'cat' deberás colocar el ID de la categoría que deseas mostrar.
        // En 'posts_per_page' deberás colocar la cantidad de posts que deseas mostrar.
        if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-xs-6 col-sm-4 col-lg-4">
                    <div class="thumbanil">
                        <img src="<?php the_field('imagen_busqueda');?>" alt="">
                        <div class="caption product-description NewsCycle">
                            <h4><?php the_title(); ?></h4>
                            <p class="intro">
                                <?php the_excerpt();?>
                            </p>
                            <hr>
                            <a href="<?php the_permalink(); ?>">
                                leer mas
                            </a>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>
