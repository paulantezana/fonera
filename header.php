<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' )?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo( 'name' )?></title>
    <meta name="description" content="<?php bloginfo('description');?>">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() );?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() );?>/assets/icon/styles.css">
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/inc/assets/grid.js"></script>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <header class="header" id="headerToggle">
        <div class="header__content">
            <a class="identity" href="<?php echo esc_url( home_url() );?>">
                <img src="<?php echo get_theme_mod('fonera_logo');?>" alt="la fonera" class="identity__logo"/>
            </a>
            <div class="nav-container">
                <div id="toogleMenu" class="toogleMenu"></div>
                <?php
                    $args = [
                      'theme_location'  => 'menu_principal',
                      'container'       => 'nav',
                      'container_class' => 'menu-nav',
                      'menu_class'      => 'main-menu ed-menu',
                      'menu_id'        => 'main-menu'
                    ];
                    wp_nav_menu($args);
                ?>
            </div>
        </div>
    </header>

    <div class="msgWebSite-container">
        <div class="msgWebSite">
            <div class="msgWebSite__item">
                <p class="foneraNotice"><?php echo get_theme_mod('fonera_notice');?></p>
            </div>
<!--            <div class="msgWebSite__item">-->
<!--                <p class="date" id="date">Miercoles 8:50 A.M.</p>-->
<!--            </div>-->
        </div>
    </div>
