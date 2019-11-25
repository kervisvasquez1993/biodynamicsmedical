<!doctype html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Interwebsite">
    <!--link para imagen en apple-->
    <!--<link rel="apple-touch-icon" href="<?php // echo get_template_directory_uri();?>/img/interwebsite.jpg"> -->
   <!--fin-->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#003663">
    <meta name="application-name" content="Interwebsite">
    <!--link para imagen en el head-->
    <!--<link rel="icon" type="image/png" href="<?php // echo get_template_directory_uri();?>/img/interwebsite.jpg" sizes="200x200"> -->

    <title><?php bloginfo('title');?></title>

    <!--fin-->
<?php wp_head();?>


</head>
<body>
<header>
    <nav id="menu-auto">
        <a  href="<?php echo esc_url(home_url('/'));?>" class="logo">
            <img src="<?php echo get_template_directory_uri();?>/img/biodynamics.png" alt="logo">
        </a>
        <div class="icono" id="icono">
            <span class="black">&#9776;</span>
        </div>
            <div class="enlaces uno" id="enlaces">
                <a href="<?php the_field('url-home');?>" class="ancla">home</a>
                <a href="<?php the_field('url-divisiones');?>" class="ancla">diviciones</a>
                <a href="<?php the_field('url-contactanos');?>" class="ancla">contactanos</a>
                <div class="ancla">
                <?php get_search_form();?>
                </div>

            </div>


    </nav>


</header>
<div class="kervis-wrap">



