<?php
/**
 *
 */

/*do_action( 'storefront_loop_before' );
/*
while ( have_posts() ) :
	the_post();

	/**
	 * Include the Post-Format-specific template for the content.
	 * If you want to override this in a child theme, then include a file
	 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
	 */
/*	get_template_part( 'content', get_post_format() );

endwhile;
*/
?>

    <div class="item active responsive">
        <img class="img-responsive img-fluid" src="<?php echo get_template_directory_uri();?>/img/test-imagen.jpg" alt="Responsive image">

    </div>
    <section class="container">
        <div class="row">
            <?php while(have_posts()): the_post();?>
    <div class="col-xs-6 col-sm-4 col-lg-4">
                 <div class="thumbnail ">
                    <img src="<?php the_field('imagen_busqueda');?>" alt="">

                </div>
            <div class="caption product-description">
                    <?php
                    get_template_part( 'content', get_post_format() );

                    ?>

            </div>
                <?php endwhile;?>

            </div>
        </div>
    </section>



<?php
/**
 * Functions hooked in to storefront_paging_nav action
 *
 * @hooked storefront_paging_nav - 10
 */
do_action( 'storefront_loop_after' );
