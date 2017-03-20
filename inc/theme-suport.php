<?php
    // Registe Nav Menu
    register_nav_menus(['menu_principal'    => 'Menú Principal']);
    add_theme_support( 'post-thumbnails' );
    
    add_theme_support( 'customize-selective-refresh-widgets' );

    function widgets_activation(){
        register_sidebar([
            'name'          => __( 'avisos', 'lafonera' ),
            'id'            => 'avisos',
            'description'   => __( 'agrege las categorias de los avisos', 'lafonera' ),
            'before_widget' => '<section id="%1$s" class="sidebar %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="sidebar__title">',
            'after_title'   => '</h2>',
            ]
        );
    }

    add_action('widgets_init','widgets_activation');