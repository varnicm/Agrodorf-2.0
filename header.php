<!doctype html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" type="text/css" media="all" />
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class("bg-secondary-subtle"); ?>>
<!-- Header with Logo, Title, and Language Selector -->
<header class="fixed-top border-bottom">
        <div class="container d-flex justify-content-between align-items-center py-2">
            <div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo2.png" alt="Logo" class="me-2" height="120"><span class="h2">Agrodorf GmbH</span>
            </div>

        </div>
        <!-- Navbar -->
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation"> -->
        <nav class="navbar  navbar-light bg-light navbar-expand-md border-body" role="navigation" id="nav1">

        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav mx-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            <div class="d-flex">
                <a href="#" class="me-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/united-kingdom-flag-icon.png" height="15" alt="EN / US"></a> | <a href="#" class="ms-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/germany-flag-icon.png" height="15" alt="DE"></a>
            </div>
                
            </div>
        </nav>

    </header>