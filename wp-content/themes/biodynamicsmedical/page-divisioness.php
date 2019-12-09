<?php
/*
 * Template Name: divisiones
 */
get_header();?>
<div class="item active responsive" id="maxilo">


</div>
<div class="row">
    <?php $arg= array(
        'post_type' => 'divisones',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order'=> 'ASC' );
    $maxilofacial= new WP_Query($arg);
    while($maxilofacial->have_posts()): $maxilofacial->the_post();?>


                    <h4><?php the_title();?></h4>

                        <?php the_excerpt();?>
                    </p>


                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>