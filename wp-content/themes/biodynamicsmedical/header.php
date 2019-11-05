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
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top tamano-navbar">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="http://biodynamics.dynamics.ve/img/logo/biodynamics-logo.svg" alt="home"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#quienes-somos">Divisón</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aventura">Contáctanos</a>
                    </li>
                    <!-- <li class="nav-item">
                         <a class="nav-link" href="#blog">Idiomas: <img src="http://biodynamics.dynamics.ve/img/flags/es.png" alt="idioma"></a>
                     </li>
                     -->
                    <li class="nav-item item-personalizado">
                        <i class="fa fa-search"></i>
                    </li>


                </ul>

            </div>
        </div>
    </nav>
    <!--fin de nav-->

    <!--imagen destacada-->
</header>

