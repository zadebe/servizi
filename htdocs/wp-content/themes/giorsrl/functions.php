<?php

if ( ! function_exists( 'giorsrl_setup' ) ) :
    function giorsrl_setup(){


        add_theme_support('post-thumbnails');
        add_image_size('large', 700, '', true); // Large Thumbnail
        add_image_size('medium', 250, '', true); // Medium Thumbnail
        add_image_size('small', 120, '', true); // Small Thumbnail
        add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    
        add_theme_support('automatic-feed-links');
    
        load_theme_textdomain('html5blank', get_template_directory() . '/languages');
    
        }
    
endif;
add_action( 'after_setup_theme', 'giorsrl_setup' );
    
    /**
 * Enqueue scripts and styles.
 */
function giorsrl_scripts() {


    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'style-menu', get_template_directory_uri() . '/assets/css/styles-menu.css');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style( 'style-lightbox', get_template_directory_uri() . '/assets/css/lightbox.css');
    wp_enqueue_style( 'style-main', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style( 'css-preset', get_template_directory_uri() . '/assets/css/presets/preset1.css');
    wp_enqueue_style( 'style-responsive', get_template_directory_uri() . '/assets/css/responsive.css');
    wp_enqueue_style( 'style-slider', get_template_directory_uri() . '/assets/css/slider.css');
    


    /*Javascript */
    /*
     <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.wwwjs"></script>
  <script type="text/javascript" src="js/main.js"></script>

     */
    wp_enqueue_script( 'jquery-script', get_template_directory_uri().'/assets/js/jquery.js', array('jquery'), '1.11.0',true);
    wp_enqueue_script( 'jquery-bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), '', true );
    wp_enqueue_script( 'jquery-invieww', get_template_directory_uri().'/assets/js/jquery.inview.min.js', array(), '', true );
    //wp_enqueue_script( 'jquery-invieww', get_template_directory_uri().'/assets/js/jquery.inview.min.js', array(), '', true );
	wp_enqueue_script( 'flash-wow', get_template_directory_uri().'/assets/js/wow.min.js', array(), '', true );
	wp_enqueue_script( 'flash-mousescroll', get_template_directory_uri().'/assets/js/mousescroll.js', array(), '', true );
	wp_enqueue_script( 'flash-smoothscroll', get_template_directory_uri().'/assets/js/smoothscroll.js', array(), '', tru);
	wp_enqueue_script( 'jquery-countTo', get_template_directory_uri().'/assets/js/jquery.countTo.js', array(), '', true );	
	wp_enqueue_script( 'flash-lightbox', get_template_directory_uri().'/assets/js/lightbox.min.js', array(), '', true );
    wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js', array(), '', true );
    wp_enqueue_script( 'jssor-slider', get_template_directory_uri().'/assets/js/jssor.slider.min.js', array(), '', true );
    wp_enqueue_script( 'jquery-slider', get_template_directory_uri().'/assets/js/jquery-slider.js', array(), '', true );
   // wp_enqueue_script( 'menu-nav', get_template_directory_uri().'/assets/js/nav.js', array(), '', true );
   wp_enqueue_script( 'script-menu', get_template_directory_uri().'/assets/js/script-menu.js', array(), '', true );
    


 

}
add_action( 'wp_enqueue_scripts', 'giorsrl_scripts'); 



function html5blank_nav()
{
    wp_nav_menu(
    array(
        'theme_location'  => 'header-menu',
        'menu'            => '',
        'container'       => 'ul',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => '',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '%3$s',
        'depth'           => 0,
        'walker'          => ''
        )
    );
}

// Register HTML5 Blank Navigation
function register_html5_menu(){
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Add Actions
//add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu

?>