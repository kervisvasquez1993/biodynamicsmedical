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
                    background-position: top right;
                    background-size: contain;">
                <div class="error-child">
                    <h2 class="error-kervis">404</h2>
                    <h3 class="error-content">PAGINA NO ENCONTRADA</h3>
                </div>

            </div>
        </a>
</div><!-- .page-content -->
</div><!-- .no-results -->