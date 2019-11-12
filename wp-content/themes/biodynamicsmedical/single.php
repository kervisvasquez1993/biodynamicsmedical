<?php get_header();?>
<div class="item active responsive">
    <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid" alt="Responsive image">
</div>

<div class="container">
    <div class="row">
    <div class="carousel-row no-gutter">
        <div class=" row slide-row">
            <div class="col-md-6 col-lg-6">
            <div class="slide-content">
                <h4>About this product</h4>
                <p> The variable step screws designed to provide rigid fixation. They are not headed allowing being threaded at both ends. </p><br>
                <p>The step difference between the two threads allows joining two bone fragments Having no head, the screw can enter deeply into the bone and inserted through articular cartilage.</p><p>Bone screw also be used in those cases wanted to obtain a rigid internal fixation of small bone fragments, particularly those in which it is not convenient the presence of a head screw.</p>
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
                        <img src="<?php the_post_thumbnail_url();?>"  class="img-responsive" alt="Los Angeles">
                    </div>
                    <div class="carousel-item item">
                        <img src="<?php the_field('imagen-secundaria');?> " alt="Chicago">
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
                        <h1>informacion</h1>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse0" title="Read More">
                            <i class="more-less fa fa-plus" aria-hidden="true"></i>
                            Indications
                        </a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingO">
                    <div class="panel-body">
                        <h1>informacion</h1>
                    </div>
                </div>
            </div>

</div>

    </div>
</div>




<?php get_footer();?>
