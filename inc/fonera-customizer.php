<?php
    function fonera__customize_register($wp_customize){
        // xxxxxxxxxxxxxxxxxxxxxxxx PANEL PRIMARY xxxxxxxxxxxxxxxxxxxxxxxx
       $wp_customize -> add_panel(
           'la_fonera', [
                'title'         => __('Panel La Fonera','fonera'),
                'priority'      => 1,
                'capability'    => 'edit_theme_options'
        ]);
        // xxxxxxxxxxxxxxxxxxxxxxxx SECTIONS xxxxxxxxxxxxxxxxxxxxxxxx
        $wp_customize -> add_section('fonera_general',[            // Section =>> Fonera General
                'title'         => __('General','fonera'),
                'description'   => 'Opciones Generales',
                'priority'      => 1,
                'panel'         => 'la_fonera'
        ]);
        $wp_customize -> add_section('fonera_header',[             // Section => fonera_header
                'title'         => __('Header','fonera'),
                'description'   => 'Personalizar Encavezado',
                'priority'      => 2,
                'panel'         => 'la_fonera'
        ]);
        $wp_customize -> add_section('fonera_contact',[
                'title'         => __('Contacto','fonera'),
                'description'   => 'Contacto',
                'priority'      => 3,
                'panel'         => 'la_fonera'
        ]);
        $wp_customize -> add_section('fonera_platform',[
                'title'         => __('Plataformas La Fonera','fonera'),
                'description'   => 'plataformas',
                'priority'      => 3,
                'panel'         => 'la_fonera'
        ]);
        $wp_customize -> add_section('fonera_prices',[
                'title'         => __('Precios Por Tamaño','fonera'),
                'description'   => 'precios',
                'priority'      => 3,
                'panel'         => 'la_fonera'
        ]);
        $wp_customize -> add_section('fonera_methods',[
                'title'         => __('Medios De Pago','fonera'),
                'description'   => 'medios de pago',
                'priority'      => 3,
                'panel'         => 'la_fonera'
        ]);



        // xxxxxxxxxxxxxxxxxxxxxxxx SETTINGS AND CONTROLS xxxxxxxxxxxxxxxxxxxxxxxx
        // @ Fonera General
        $wp_customize -> add_setting('background_site',['default' => '#f5f5f5']);
        $wp_customize -> add_setting('primary_color',['default' => '#fff']);
        $wp_customize -> add_setting('secondary_color',[ 'default' => '#fff' ]);
        $wp_customize -> add_setting('fonera_logo',['default'=> '']);
        $wp_customize -> add_setting('img_post_default',['default' => '']);
        $wp_customize -> add_setting('img_magazine_default',['default' => '']);
        $wp_customize -> add_setting('img_news_default',['default' => '']);
        // $wp_customize -> add_setting('img_advertising_default',['default' => '']);

        $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize,'background_site',[
                'label'         => __('Color Fondo','fonera'),
                'section'       => 'fonera_general',
                'settings'      => 'background_site'
        ]));
        $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize,'primary_color',[
                'label'         => __('Color Primario','fonera'),
                'section'       => 'fonera_general',
                'settings'      => 'primary_color'
        ]));
        $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize,'secondary_color',[
                'label'         => __('Color Secundario','fonera'),
                'section'       => 'fonera_general',
                'settings'      => 'secondary_color'
        ]));

        class Custom{
            function __construct($custon,$setting,$titleDescription)
            {
                $custon -> add_control(new WP_Customize_Image_Control($custon,$setting,[
                    'label'         => __($titleDescription,'fonera'),
                    'section'       => 'fonera_general',
                    'settings'      => $setting
                ]));
            }
        }
        new Custom($wp_customize,'fonera_logo','Logo De La Empresa');
        new Custom($wp_customize,'img_post_default','Imagen Por Defecto En Las Publicaciones');
        new Custom($wp_customize,'img_magazine_default','Imagen Por Defecto De la Revista La Fonera');
        new Custom($wp_customize,'img_news_default','Imagen Por Defecto De Las Noticias');
        // new Custom($wp_customize,'img_advertising_default','Imagen Por Defecto de la publicidad');
        // @ End Fonera General


        // @ Notice Zone
        $wp_customize -> add_setting('fonera_notice',['default'       => 'la fonera']);
        $wp_customize -> selective_refresh -> add_partial('fonera_notice',['selector'=> '.foneraNotice',]);
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_notice',[
                'label'         => __('La Fonera Eventos','fonera'),
                'section'       => 'fonera_header',
                'settings'      => 'fonera_notice',
                'type'          => 'text',
        ]));
        // @ Contact
        // @ Fonera Contact
        $wp_customize -> add_setting('fonera_email',['default' => 'info@avisoslafonera.com']);
        $wp_customize -> add_setting('fonera_email2',['default' => '']);
        $wp_customize -> add_setting('foneta_telephone',['default'=>'']);
        $wp_customize -> add_setting('foneta_telephone2',['default'=>'']);
        $wp_customize -> add_setting('fonera_phone',['default'=>'']);
        $wp_customize -> add_setting('fonera_phone2',['default'=>'']);
        $wp_customize -> add_setting('fonera_facebook',['default' => 'http://facebook.com']);
        $wp_customize -> add_setting('fonera_twitter',['default' => 'http://twitter.com']);
        $wp_customize -> add_setting('fonera_youtube',['default' => 'http://youtube.com']);
        $wp_customize -> add_setting('fonera_offices',['default' => 'Cusco']);

        $wp_customize -> selective_refresh -> add_partial('fonera_email',['selector' => '.fonera--email']);
        $wp_customize -> selective_refresh -> add_partial('fonera_facebook',['selector' => '.fonera--facebook']);
        $wp_customize -> selective_refresh -> add_partial('fonera_offices',['selector' => '.fonera--offices']);

        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_email',[
                'label'         => __('Email 1','fonera'),
                'section'       => 'fonera_contact',
                'settings'      => 'fonera_email',
                'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_email2',[
            'label'         => __('Email 2','fonera'),
            'section'       => 'fonera_contact',
            'settings'      => 'fonera_email2',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'foneta_telephone',[
            'label'         => __('Telefono 1','fonera'),
            'section'       => 'fonera_contact',
            'settings'      => 'foneta_telephone',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'foneta_telephone2',[
            'label'         => __('Telefono 2','fonera'),
            'section'       => 'fonera_contact',
            'settings'      => 'foneta_telephone2',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_phone',[
            'label'         => __('Celular 1','fonera'),
            'section'       => 'fonera_contact',
            'settings'      => 'fonera_phone',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_phone2',[
            'label'         => __('Celular 2','fonera'),
            'section'       => 'fonera_contact',
            'settings'      => 'fonera_phone2',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_facebook',[
            'label'         => __('Facebook','fonera'),
            'section'       => 'fonera_contact',
            'settings'      => 'fonera_facebook',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_twitter',[
            'label'         => __('Twitter','fonera'),
            'section'       => 'fonera_contact',
            'settings'      => 'fonera_twitter',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_youtube',[
            'label'         => __('Youtube','fonera'),
            'section'       => 'fonera_contact',
            'settings'      => 'fonera_youtube',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_offices',[
            'label'         => __('Youtube','fonera'),
            'section'       => 'fonera_contact',
            'settings'      => 'fonera_offices',
            'type'          => 'textarea',
        ]));

        // @ Services la fonera
        $wp_customize -> add_setting('fonera_platform_title',['default'=>'']);
        $wp_customize -> add_setting('fonera_platform_description',['default'=>'']);
        $wp_customize -> selective_refresh -> add_partial('fonera_platform_title',['selector' => '.fonera--platform--title']);

        $wp_customize -> add_setting('fonera_revista_link',['default'=>'/revista']);
        $wp_customize -> add_setting('fonera_revista_img',['default'=>'']);
        $wp_customize -> add_setting('fonera_revista_title',['default'=>'']);
        $wp_customize -> selective_refresh -> add_partial('fonera_revista_link',['selector' => '.fonera--revista--link']);

        $wp_customize -> add_setting('fonera_facebook_link',['default'=>'']);
        $wp_customize -> add_setting('fonera_facebook_img',['default'=>'']);
        $wp_customize -> add_setting('fonera_facebook_title',['default'=>'']);
        $wp_customize -> selective_refresh -> add_partial('fonera_facebook_link',['selector' => '.fonera--facebook--link']);

        $wp_customize -> add_setting('fonera_web_link',['default'=>'/']);
        $wp_customize -> add_setting('fonera_web_img',['default'=>'']);
        $wp_customize -> add_setting('fonera_web_title',['default'=>'']);
        $wp_customize -> selective_refresh -> add_partial('fonera_web_link',['selector' => '.fonera--web--link']);

        $wp_customize -> add_setting('fonera_mural_link',['default'=>'']);
        $wp_customize -> add_setting('fonera_mural_img',['default'=>'']);
        $wp_customize -> add_setting('fonera_mural_title',['default'=>'']);
        $wp_customize -> selective_refresh -> add_partial('fonera_mural_link',['selector' => '.fonera--mural--link']);
        // ## Header
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_platform_title',[
            'label'         => __('Plataforma Titulo','fonera'),
            'section'       => 'fonera_platform',
            'settings'      => 'fonera_platform_title',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_platform_description',[
            'label'         => __('Plataforma Descripcion','fonera'),
            'section'       => 'fonera_platform',
            'settings'      => 'fonera_platform_description',
            'type'          => 'textarea',
        ]));

        // ## REVISTA
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_revista_link',[
            'label'         => __('Revista Enlace','fonera'),
            'section'       => 'fonera_platform',
            'settings'      => 'fonera_revista_link',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_revista_title',[
            'label'         => __('Revista Titulo','fonera'),
            'section'       => 'fonera_platform',
            'settings'      => 'fonera_revista_title',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize,'fonera_revista_img',[
            'label'         => __('Revista Imagen','fonera'),
            'section'       => 'fonera_platform',
            'settings'      => 'fonera_revista_img'
        ]));
        // ## Facebook
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_facebook_link',[
            'label'         => __('Facebook Enlace','fonera'),
            'section'       => 'fonera_platform',
            'settings'      => 'fonera_facebook_link',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_facebook_title',[
            'label'         => __('Facebook Titulo o Descripcion','fonera'),
            'section'       => 'fonera_platform',
            'settings'      => 'fonera_facebook_title',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize,'fonera_facebook_img',[
            'label'         => __('Facebook Imagen','fonera'),
            'section'       => 'fonera_platform',
            'settings'      => 'fonera_facebook_img'
        ]));


        // ## Web
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_web_link',[
            'label'         => __('Web Enlace','fonera'),
            'section'       => 'fonera_platform',
            'settings'      => 'fonera_web_link',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_web_title',[
            'label'         => __('Web Titulo o Descripcion','fonera'),
            'section'       => 'fonera_platform',
            'settings'      => 'fonera_web_title',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize,'fonera_web_img',[
            'label'         => __('Web Imagen','fonera'),
            'section'       => 'fonera_platform',
            'settings'      => 'fonera_web_img'
        ]));


        // ## Mural
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_mural_link',[
            'label'         => __('Mural Enlace','fonera'),
            'section'       => 'fonera_platform',
            'settings'      => 'fonera_mural_link',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_mural_title',[
            'label'         => __('Mural Titulo o Descripcion','fonera'),
            'section'       => 'fonera_platform',
            'settings'      => 'fonera_mural_title',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize,'fonera_mural_img',[
            'label'         => __('Mural Imagen','fonera'),
            'section'       => 'fonera_platform',
            'settings'      => 'fonera_mural_img'
        ]));


        // @ FONERA PRICES AND QUESTION
        $wp_customize -> add_setting('fonera_prices_title',['default'=>'']);
        $wp_customize -> selective_refresh -> add_partial('fonera_prices_title',['selector' => '.fonera--prices--title']);
        $wp_customize -> add_setting('fonera_prices_description',['default'=>'']);
        $wp_customize -> add_setting('fonera_prices_img',['default'=>'']);
        $wp_customize -> add_setting('fonera_prices_descuento',['default'=>'']);
        $wp_customize -> selective_refresh -> add_partial('fonera_prices_descuento',['selector' => '.fonera--prices--descu']);
        $wp_customize -> add_setting('fonera_prices_file',['default'=>'']);
        $wp_customize -> add_setting('fonera_question_title',['default'=>'']);
        $wp_customize -> selective_refresh -> add_partial('fonera_question_title',['selector' => '.fonera--question--title']);
        $wp_customize -> add_setting('fonera_question_description',['default'=>'']);

        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_prices_title',[
            'label'         => __('Precios Titutlo','fonera'),
            'section'       => 'fonera_prices',
            'settings'      => 'fonera_prices_title',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_prices_description',[
            'label'         => __('Precios Descripcion','fonera'),
            'section'       => 'fonera_prices',
            'settings'      => 'fonera_prices_description',
            'type'          => 'textarea',
        ]));
        $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize,'fonera_prices_img',[
            'label'         => __('Precions Imagen','fonera'),
            'section'       => 'fonera_prices',
            'settings'      => 'fonera_prices_img'
        ]));
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_prices_descuento',[
            'label'         => __('Precios Descuento u Otros','fonera'),
            'section'       => 'fonera_prices',
            'settings'      => 'fonera_prices_descuento',
            'type'          => 'textarea',
        ]));
        $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'fonera_prices_file', [
            'label'      => __( 'Lista De Precios Formato PDF', 'mytheme' ),
            'section'    => 'fonera_prices',
            'settings'   => 'fonera_prices_file',
        ]));
        // ## Questions
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_question_title',[
            'label'         => __('Titulo Algunas Aclaraciones','fonera'),
            'section'       => 'fonera_prices',
            'settings'      => 'fonera_question_title',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_question_description',[
            'label'         => __('Descripcion Algunas Aclaraciones','fonera'),
            'section'       => 'fonera_prices',
            'settings'      => 'fonera_question_description',
            'type'          => 'textarea',
        ]));


        // @ Methods Pay
        $wp_customize -> add_setting('fonera_cajacusco_cuenta',['default'=>'']);
        $wp_customize -> selective_refresh -> add_partial('fonera_cajacusco_cuenta',['selector' => '.fonera--cajacusco--cuenta']);
        $wp_customize -> add_setting('fonera_cajacusco_titular',['default'=>'']);
        $wp_customize -> selective_refresh -> add_partial('fonera_cajacusco_titular',['selector' => '.fonera--cajacusco--titular']);
        $wp_customize -> add_setting('fonera_cajacusco_img',['default'=>'']);

        $wp_customize -> add_setting('fonera_bcp_cuenta',['default'=>'']);
        $wp_customize -> selective_refresh -> add_partial('fonera_bcp_cuenta',['selector' => '.fonera--bcp--cuenta']);
        $wp_customize -> add_setting('fonera_bcp_titular',['default'=>'']);
        $wp_customize -> selective_refresh -> add_partial('fonera_bcp_titular',['selector' => '.fonera--bcp--titular']);
        $wp_customize -> add_setting('fonera_bcp_img',['default'=>'']);

        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_cajacusco_cuenta',[
            'label'         => __('Numero De Cuneta CAJA CUSCO','fonera'),
            'section'       => 'fonera_methods',
            'settings'      => 'fonera_cajacusco_cuenta',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_cajacusco_titular',[
            'label'         => __('Titular CAJA CUSCO','fonera'),
            'section'       => 'fonera_methods',
            'settings'      => 'fonera_cajacusco_titular',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize,'fonera_cajacusco_img',[
            'label'         => __('Logo CAJA CUSCO','fonera'),
            'section'       => 'fonera_methods',
            'settings'      => 'fonera_cajacusco_img'
        ]));
        // ## BCP
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_bcp_cuenta',[
            'label'         => __('Numero De Cuneta BCP','fonera'),
            'section'       => 'fonera_methods',
            'settings'      => 'fonera_bcp_cuenta',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Control($wp_customize,'fonera_bcp_titular',[
            'label'         => __('Titular BCP','fonera'),
            'section'       => 'fonera_methods',
            'settings'      => 'fonera_bcp_titular',
            'type'          => 'text',
        ]));
        $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize,'fonera_bcp_img',[
            'label'         => __('Logo BCP','fonera'),
            'section'       => 'fonera_methods',
            'settings'      => 'fonera_bcp_img'
        ]));
    }
    add_action('customize_register','fonera__customize_register');



    // xxxxxxxxxxxxxxxxxxxxxxxx FUNCTIONS COLOR CUSTOMIZE xxxxxxxxxxxxxxxxxxxxxxxx
    function change_body_color_init(){
        ?><style>
            body{
                background-color: <?php echo get_theme_mod('background_site')?>;
            }
        </style><?php
    }
    add_action('wp_head','change_body_color_init');