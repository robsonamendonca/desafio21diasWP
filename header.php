<?php
/**
 * Tema construido no Desafio21Dias
 *
 * @link http://torneseumprogramador.com.br
 *
 * @package WordPress
 * @subpackage Desafio21Dias
 * @since Desafio21Dias
 */

 
$url = get_stylesheet_directory_uri();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Um tema criado por alunos do Torne-se um Programador" />
    <meta name="author" content="Alunos Torne-se um Programador" />
    <meta name='ir-site-verification-token' value='-28223945'>

    <meta property="og:title" content="Freelancer - Theme Preview">
    <meta property="og:site_name" content="Robson Mendonça">
    <meta property="og:type" content="website">
    <meta property="og:description" content="">
    <meta property="og:image" content="<?php echo $url;?>/assets/img/branding/og-start-bootstrap.png">
    <meta property="og:url" content="<?php echo $url;?>/previews/freelancer/">
    <meta property="og:image:alt" content="Freelancer - Theme Preview">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="<?php echo $url;?>/assets/img/branding/start-bootstrap-logo-500x500.png">
    <meta name="twitter:site" content="@SBootstrap">
    <!-- icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $url;?>/assets/img/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $url;?>/assets/img/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $url;?>/assets/img/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $url;?>/assets/img/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $url;?>/assets/img/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $url;?>/assets/img/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $url;?>/assets/img/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $url;?>/assets/img/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $url;?>/assets/img/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href="<?php echo $url;?>/assets/img/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $url;?>/assets/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $url;?>/assets/img/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $url;?>/assets/img/vfavicon-16x16.png">
    <link rel="manifest" href="<?php echo $url;?>/assets/img/icons/manifest.json">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-TileColor" content="#dd3d31">
    <meta name="theme-color" content="#ffffff">

    <title>Freelancer - Robson Mendonça</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo $url;?>/assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo $url;?>/assets/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="<?php echo home_url();?>/#page-top">Robson Mendonça</a>
            <button
                class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded"
                type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <!-- <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="<?php echo home_url();?>/#portfolio">Habilidades</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="<?php echo home_url();?>/#about">Sobre</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="<?php echo home_url();?>/#contact">Contato</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="<?php echo home_url();?>/cv_habilidades" target="_blank">Currículo</a></li>

                </ul>
            </div> -->
            <?PHP
            wp_nav_menu( array(
                            'theme_location'  => 'meu_site',
                            'container'       => 'div',
                            'container_id'    => 'navbarResponsive',
                            'container_class' => 'collapse navbar-collapse',
                            'menu_class'      => 'navbar-nav ml-auto',                      
                          )

                      )     
            ?>
        </div>
        <?php get_search_form(); ?>
    </nav>