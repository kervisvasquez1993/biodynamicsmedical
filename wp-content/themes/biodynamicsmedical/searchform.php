<form role="search" method="get" class="search-form form-inline" action="<?php echo home_url( '/' ); ?>">
    <label>
        <input type="search" class="search-field form-control mr-sm-2" placeholder="<?php echo esc_attr_x( 'Biodynamics Product', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>

    <input type="submit" class="search-submit btn btn-outline-dark my-2 my-sm-0" value="<?php echo esc_attr_x( 'Search...', 'submit button' ) ?>" />
</form>
<div class="img-idioma">
    <a href="<?php the_field('ingles');?>"><img src="<?php echo get_template_directory_uri().'/img/ingles.png'?>" alt=""></a>
    <a href="<?php the_field('espanol')?>"><img src="<?php echo get_template_directory_uri().'/img/espanol.png'?>" alt=""></a>
</div>