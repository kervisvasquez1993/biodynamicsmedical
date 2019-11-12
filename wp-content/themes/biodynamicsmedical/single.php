<?php get_header();?>
<div class="item active responsive">
    <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid" alt="Responsive image">
</div>
<?php while(have_posts()): the_post() ;?>
<div class="container">
    <div class="row">
    <div class="carousel-row no-gutter">
        <div class=" row slide-row">
            <div class="col-md-6 col-lg-6">
            <div class="slide-content">
                <?php the_content();?>
            </div>
        </div>
            <div class="col-md-6 col-lg-6">
            <div id="carousel-1" class="carousel slide carousel slide carousel-fade slide-carousel" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>

                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item item active">

                        <img src="<?php the_field('imagen_principal_producto');?>"  class="img-responsive" alt="Los Angeles">
                    </div>
                    <div class="carousel-item item">
                        <img src="<?php the_field('imagen_secundaria_producto') ;?> " alt="Chicago">
                    </div>

                </div>

        </div>
    </div>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0" title="Read More">
                            <i class="more-less fa fa-plus" aria-hidden="true"></i>
                            Indications
                        </a>
                    </h4>
                </div>
                <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingO">
                    <div class="panel-body">
                        <?php the_field('indicaciones')?>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse0" title="Read More">
                            <i class="more-less fa fa-plus" aria-hidden="true"></i>
                            Beneficios y caracteristicas
                        </a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingO">
                    <div class="panel-body">
                        <?php the_field('beneficios_y_caracteristicas')?>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse0" title="Read More">
                            <i class="more-less fa fa-plus" aria-hidden="true"></i>
                                Caracteristicas tecnicas
                        </a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingO">
                    <div class="panel-body">
                        <?php the_field('caracteristicas_tecnicas')?>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse0" title="Read More">
                            <i class="more-less fa fa-plus" aria-hidden="true"></i>
                            Descargar Archivo
                        </a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingO">
                    <div class="panel-body">
                        <a href="<?php the_field('archivo')?>">ver mas</a>

                    </div>
                </div>
            </div>

</div>

    </div>
</div>
<?php endwhile;?>



<?php get_footer();?>
