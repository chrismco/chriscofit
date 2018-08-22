<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        <?php wp_title(); ?>
    </title>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" media="all">
    <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
    <!--[if gte IE 9]>
    <style type="text/css">
        .gradient {
            filter: none;
        }
    </style>
    <![endif]-->
    <?php wp_head(); ?>


            <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121630751-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-121630751-1');
        </script>
</head>

<body <?php body_class(); ?>>
<header>
    <div id="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 display-table">
                    <h1  class="call display-cell" ><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/chriscofit-logo.png"  alt=""></></a> </h1>
                </div>
                <!-- <div class="col-xs-6 display-table">
                    <!-- <div class="call display-cell hidden-xs">
                        Schedule your FREE consultation
                    </div> -->
                    <!-- <div class="call display-cell visible-xs">
                        <a class="call-btn" href="tel:888-399-0423">Call Us <i class="fa fa-phone"></i></a>
                    </div> 
                </div> -->
            </div>
        </div>
    </div>
    <div id="tpc-nav">
        <div class="container">
            <div class="row tpc-nav">
                <div class="col-md-12">
                        <nav id="mobile">
                            <div id="toggle-bar"><a href="<?php bloginfo('url'); ?>"><i class="fa fa-home icon-home"></i></span>
                                </a> <a class="mtoggle" href="#"><i class="fa fa-bars icon-menu"></i></a></div>
                            <?php wp_nav_menu(array('container' => false, 'theme_location' => 'primary-menu')); ?>
                        </nav>
                        <?php wp_nav_menu(array('container' => false, 'theme_location' => 'primary-menu')); ?>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- <section id="quote" class="visible-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="green-btn eModal-1" href="#">Get Quoted</a>
            </div>
        </div>
    </div>
</section> -->

