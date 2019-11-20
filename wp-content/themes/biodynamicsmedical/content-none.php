<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

?>
<div class="no-results not-found">
    <header class="page-header">
        <a href="<?php echo esc_url(home_url('/'));?>">
            <div class="contenedor-error" style="
                background: url(<?php echo get_template_directory_uri()?>/img/404.png);
                    background-repeat: no-repeat;
                    background-position: center center;
                    background-size: contain;">
                <div class="error-child">
                    <h2 class="error-kervis">404</h2>
                    <h3 class="error-content">PAGINA NO ENCONTRADA</h3>
                </div>
                <div class="error-child-2">
                    <p class="404-parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto blanditiis explicabo libero minus molestiae sunt ut.</p>
                </div>

            </div>
        </a>
</div><!-- .page-content -->
</div><!-- .no-results -->