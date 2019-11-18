<?php get_header();?>
<?php while(have_posts()): the_post();?>
    <form  class="" method="POST">
        <div class="form-group col-lg-12 col-centered col-xs-12">
            <label for="nombre" class="label"><?php the_field('nombre');?></label>
            <input type="text" name="nombrecompleto" id="nombre" class="validate form-control" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" required>

        </div>
        <div class="form-group col-centered col-lg-6 col-xs-12">
            <label for="exampleInputEmail1"><?php the_field('email');?></label>
            <input type="email" class="form-control validate" name="email" id="exampleInputEmail1" pattern="^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$" aria-describedby="emailHelp" required>
            <small id="emailHelp" class="form-text text-muted"><?php the_field('smallEmail');?></small>
        </div>
        <div class="form-group col-centered col-lg-6   col-xs-12">
            <label for="telefono"><?php the_field('telefono');?></label>
            <input type="tel" class="form-control" id="telefono" name="telefono" required>
            <small id="emailHelp" name="telefono"  pattern="^[0-9]+$" class="form-text text-muted"><?php the_field('smallTelefono');?></small>
        </div>

        <div class="form-group col-centered col-lg-12">
            <label for="comment"><?php the_field('comentarios');?></label>
            <textarea class="form-control" rows="5" id="comment" name="mensaje" required></textarea>


        </div>
        <div class="form-group col-centered col-lg-12">
            <input type="submit" name="contactanos" class="btn btn-primary" value="Send">
            <input type="hidden" name="oculto"  value="1">
        </div>
    </form>
<?php endwhile;?>



            <?php get_footer();?>
