<?php get_header();?>

    <div class="item active responsive">
        <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid" alt="Responsive image">
    </div>

    <div class="container">
            <span class="ruta-interna abel">
       <a href="<?php the_field('url-contactanos');?>" class="here">Contacto</a> /
     </span>
        <div class="row">
            <div class="cuerpo-gracias">
                   <div class="gracias-in">
                        <div class="img-gracias">
                            <img src="<?php echo get_template_directory_uri();?>/img/sobrecito.png" alt="">
                        </div>

                        <div class="text-gracias">
                            <h2 class="gracias-body-h2">
                                GRACIAS
                            </h2>
                         <p class="gracias-body-p">por contactarnos</p>
                            <p class="gracias-body-p gracias-body-p-2"> Su mensaje fue enviado correctamente</p>
                        </div>
                   </div>
                    <p class="parrafo-gracias"><?php the_field('text-gracias')?></p>
            </div>
        </div>
    </div>





<?php get_footer();?>