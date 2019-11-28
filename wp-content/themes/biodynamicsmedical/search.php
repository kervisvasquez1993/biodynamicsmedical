<?php
/**
 * The template for displaying search results pages.
 *
 *
 */
get_header(); ?>

    <div class="item active responsive">
     <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/"?>" class="img-fluid" alt="Responsive image">

    </div>
<?php if ( have_posts() ) : ?>
    <?php
    /* translators: %s: search term
    printf( esc_attr__( 'Search Results for: %s', 'storefront' ), '<span>' . get_search_query() . '</span>' );
*/

    ?>
    </h1>

    </header><!-- .page-header -->
    <?php
        get_template_part( 'loop' );
        else:
            get_template_part( 'content', 'none' );
        endif;

?>


<?php
get_footer();
