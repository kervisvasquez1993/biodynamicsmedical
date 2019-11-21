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

<nav>
    <div class="logo-bio">
        <img src="" alt="">
    </div>
    <div class="icono" id="icono">
        <span>&#9776;</span>
    </div>
    <div class="enlaces uno" id="enlces">
        <a href="#">hola1</a>
        <a href="#">hola2</a>
        <a href="#">hola3</a>
    </div>

</nav>







<!--
    <nav class="navbar">
        <div class="container wrapper-menu">
            <a class="navbar-brand img-fluid" href="<?php echo esc_url(home_url('/'));?>">

                <img src="<?php echo get_template_directory_uri().'/img/biodynamics.png'?>" alt="home">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse biodynamics-flex navbar-collapse" id="navbarSupportedContent">

                <?php
                /*$arg= array(
                    'theme_location' => 'header_menu',
                    'container' => 'ul',

                    'menu_class' => '',
                    'menu_id' => 'kervis'

                );
                wp_nav_menu($arg);
                ?>
                <div class="kervis-flex">
                <?php get_search_form(); */?>
                </div>
            </div>

        </div>

    </nav>-->
    <!--fin de nav-->

    <!--imagen destacada-->
    <div class="texto">
        <h1>kervis</h1>
        <h2>suscribete</h2>
    </div>

</header>



