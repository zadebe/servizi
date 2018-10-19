</<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
            echo ' : ';
        } ?><?php bloginfo('name'); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" rel="shortcut icon">
    <!--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }</script>-->
    <!--Google Font link-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

    <meta name="description" content="<?php -bloginfo('description'); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/html5shiv.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>
<!--.preloader-->
<div class="preloader"><i class="fa fa-circle-o-notch fa-spin"></i></div>
<!--/.preloader-->
<header id="home" class="navbar navbar-fixed-top main-nav main-nav-2">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                <img class="img-responsive hidden-xs hidden-sm"
                     src="<?php echo get_template_directory_uri(); ?>/images/logo_2.png" alt="logo">
                <img class="img-responsive hidden-lg"
                     src="<?php echo get_template_directory_uri(); ?>/images/logo-xs.png" alt="logo">
            </a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">
                <?php html5blank_nav(); ?>
            </ul>
        </nav>
    </div><!--/#main-nav-->
</header><!--/#home-->





