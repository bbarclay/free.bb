<?php
/**
 * functions and definitions
 *
 * @package BB AU FREE
 */


/** =====================================
*   1. HOOK
====================================== */

if ( !defined( 'AA_THEME_DIR' ) ){
    define('AA_THEME_DIR', ABSPATH . 'wp-content/themes/' . get_template());
}


if ( ! isset( $content_width ) ) {
	$content_width = 1000; 
}


add_action( 'after_setup_theme', 'themezero_setup' );
add_action( 'wp_enqueue_scripts', 'aa_scripts' );
add_action( 'wp_enqueue_scripts', 'aa_styles' ); 
add_action( 'wp_enqueue_scripts', 'aa_enqueue_comments_reply' );
add_filter( 'body_class', 'daleb_body_classes' );
add_filter( 'query_vars', 'add_query_vars_filter' );
add_action( 'customize_register', 'themezero_customizer' );



if ( ! function_exists( 'themezero_setup' ) ) :

	function themezero_setup() {



		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

        add_image_size('book-image', 500, 650);

		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'neat' ),
            'footer-menu' => esc_html__( 'Footer Menu', 'neat' ),
            'menu' => esc_html__( 'Social Menu', 'neat' ),
            'fine' => esc_html__( 'Extra Footer', 'neat' ),
		) );


		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		) );


	}

endif; 


/** =====================================
*   2. SCRIPTS
====================================== */

function aa_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {


    	//wp_enqueue_script('jquery'); // Enqueue it!
        //wp_deregister_script('jquery'); // Deregister WordPress jQuery
        //wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array(), '1.11.2');


        wp_register_script('aa_vendorsJs', get_template_directory_uri() . '/assets/js/vendors.min.js', array('jquery'), false, true ); // Custom scripts
        wp_enqueue_script('aa_vendorsJs'); // Enqueue it!

        wp_register_script('aa_customJs', get_template_directory_uri() . '/assets/js/custom.min.js', array('jquery'), false, true); // Custom scripts
        wp_enqueue_script('aa_customJs'); // Enqueue it!

    }

}


function aa_styles()
{

    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css">', array(), '1.0', 'all');
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=PT+Sans">', array(), '1.0', 'all');
    wp_register_style('aa_style', get_template_directory_uri() . '/style.min.css', array(), '1.0', 'all');
    wp_enqueue_style('aa_style'); // Enqueue it!

}


function aa_enqueue_comments_reply() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}


/** =====================================
*   3. FILTERS
====================================== */

function daleb_body_classes( $classes ) {
    if( ! is_front_page() ) {
        $classes[] = 'subpage';
    }

    if( is_singular() ) {
        $classes[] = 'singular';
    }

    if( is_page_template('full-width-module-page.php') ) {
        $classes[] = 'module-page';
    }

    if( is_archive() || is_search() || is_home() ) {
        $classes[] = 'list-view grid-view';
    }

    return $classes;
}


function add_query_vars_filter( $vars ){
  $vars[] = "email";
  return $vars;
}



/** =====================================
*   5. Customizer
====================================== */

function themezero_customizer( $wp_customize ) {

    $wp_customize->add_section('themezero_footer_option', array(
            'title' => 'Footer Option',
            'priority' => 120

    ));


   // =====================
   // Text Input
   // ===================== 

   $wp_customize->add_setting('themezero_footer_title', array(
                'default' => 'DOWNLOAD FREE E-BOOK',
                'capability' => 'edit_theme_options',
    ));

   $wp_customize->add_control('themezero_text_control', array(
                'label' => __('Form Heading', 'themezero'),
                'section' => 'themezero_footer_option',
                'settings' => 'themezero_footer_title'
    ));



    $wp_customize->add_setting('themezero_footer_desc', array(
                'default' => 'Text',
                'capability' => 'edit_theme_options'        
    ));

   $wp_customize->add_control('themezero_textarea_control', array(
                'type' => 'textarea',
                'label' => __('Footer Description', 'themezero'),
                'section' => 'themezero_footer_option',
                'settings' => 'themezero_footer_desc'
    ));

}

