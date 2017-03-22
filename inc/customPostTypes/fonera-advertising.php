<?php
/**
 * Created by PhpStorm.
 * User: Paul Antezana
 * Date: 12/03/2017
 * Time: 4:39 PM
 */
function add_action_advertising(){
    $singular   = 'Publicidad';
    $plural     = 'Publicidad';
    $labels = [
        'name'  => $plural,
        'singular_name'=> $singular,
        'add_new'       => "Añadir {$singular}",
        'add_new_item'  => "Añadir nuevo {$singular}",
        'edit_item'     => "Editar {$singular}",
        'new_item'      => "Nuevo {$singular}",
        'view_item'     => "Ver {$singular}",
        'view_items'    => "Ver {$plural}",
        'search_items'  => "Buscar {$plural}",
        'not_fount'     => "No se han encontrado ningun{$singular}",
    ];
    $suports = [
        'title',
        'thumbnail',
        'author',
        'editor',
//            'custom-fields',
//            'page-attributes',
        'comments'
    ];
    $args = [
        'labels'                => $labels,
        'public'                => true,
        'description'           => 'Plugin de tipo' . $singular,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 9,
        'menu_icon'             => 'dashicons-migrate',
        'capability_type'       => 'post',
        'map_meta_cap'          => true,
        'hierarchical'          => false,
        'has_archive'           => true,
        'query_var'             => true,
        'can_export'            => true,
        'delete_with_user'      => false,

        'supports'              => $suports,
        'rewrite'               =>[
            'slug'          => 'advertising',
            'with_front'    => true,
            'feeds'         => true,
            'pages'         => true,
        ]
    ];
    register_post_type('advertising',$args);
}
add_action('init','add_action_advertising');

/**
 *
 *
 *
 *
 */
function add_register_advertising(){
    $singular   = 'Categoria';
    $plural     = 'Categorias';
    $labels = [
        'name'                          => $plural,
        'singular_name'                 => $singular,
        'all_items'                     => "Toda las {$plural}",
        'edit_item'                     => "Editar {$singular}",
        'view_item'                     => "Ver {$singular}",
        'update_item'                   => "Actualizar {$singular}",
        'add_new_item'                  => "Añadir nueva {$singular}",
        'new_item_name'                 => "Nombre de nuevo {$singular}",
        'parent_item'                   => null,
        'parent_item_colon'             => null,
        'search_items'                  => "Buscar {$plural}",
        'popular_items'                 => "{$plural} Populares",
        'separate_items_with_commas'    => 'Separacion por comas',
        'add_or_remove_items'           => "Añadir o remover {$plural}",
        'not_found'                     => "NO hay {$plural}",
    ];


    $args = [
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [
            'slug' => 'advertising_category',
        ]
    ];
    register_taxonomy('advertising_category', 'advertising',$args);
}
add_action('init','add_register_advertising');