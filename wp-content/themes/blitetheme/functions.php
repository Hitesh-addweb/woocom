<?php  

/**
 * Twenty Sixteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * Twenty Sixteen only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
    require get_template_directory() . '/inc/back-compat.php';
}

function add_styles(){

	wp_enqueue_style('mainstyle',get_stylesheet_uri());//it will get the main file of theme template automatically and attach it
	wp_enqueue_style('components',get_template_directory_uri().'/css/components.css');
	wp_enqueue_style('icons',get_template_directory_uri().'/css/icons.css');
	wp_enqueue_style('responsee',get_template_directory_uri().'/css/responsee.css');
	wp_enqueue_style('template-style',get_template_directory_uri().'/css/template-style.css');
	wp_enqueue_style('owl.carousel.css',get_template_directory_uri().'/owl-carousel/owl.carousel.css');
	wp_enqueue_style('owl.theme.css',get_template_directory_uri().'/owl-carousel/owl.theme.css');


	wp_enqueue_script('jquery.events.touch.js',get_template_directory_uri().'/js/jquery.events.touch.js',array(),'1.1',true);
	wp_enqueue_script('jquery-1.8.3.min.js',get_template_directory_uri().'/js/jquery-1.8.3.min.js',array(),'1.1',true);
	wp_enqueue_script('jquery-ui.min.js',get_template_directory_uri().'/js/jquery-ui.min.js',array(),'1.1',true);
	wp_enqueue_script('modernizr.js',get_template_directory_uri().'/js/modernizr.js',array(),'1.1',true);
	wp_enqueue_script('responsee.js',get_template_directory_uri().'/js/responsee.js',array(),'1.1',true);
	wp_enqueue_script('template-scripts.js',get_template_directory_uri().'/js/template-scripts.js',array(),'1.1',true);

	wp_enqueue_script('owl.carousel.js',get_template_directory_uri().'/owl-carousel/owl.carousel.js',array(),'1.1',true);
	wp_enqueue_script('owl.carousel.min.js',get_template_directory_uri().'/owl-carousel/owl.carousel.min.js',array(),'1.1',true);
    wp_enqueue_script('popup.js',get_template_directory_uri().'/owl-carousel/popup.js',array(),'1.1',true);


    //wp_enqueue_script('ajax.js',get_template_directory_uri().'/js/ajax.js',array(),'1.1',true);

   // wp_localize_script('my-ajax-handle', 'the_ajax_script', array('ajaxurl' =>admin_url('admin-ajax.php')));
} 






	//add_action

add_action("wp_enqueue_scripts","add_styles");


function add_nav_menu(){
  register_nav_menus(
     array(
        'primary-menu'=>__('primary menu'),
        'footer-menu'=>__('footer menu')
    ));
}

	add_action('init','add_nav_menu');//its automatically works while theme will activ


    function custom_post_type1() {

// Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'slider', 'Post Type General Name', 'twentythirteen' ),
            'singular_name'       => _x( 'slider', 'Post Type Singular Name', 'twentythirteen' ),
            'menu_name'           => __( 'slider', 'twentythirteen' ),
            'parent_item_colon'   => __( 'slider', 'twentythirteen' ),
            'all_items'           => __( 'slider', 'twentythirteen' ),
            'view_item'           => __( 'slider', 'twentythirteen' ),
            'add_new_item'        => __( 'add new', 'twentythirteen' ),
            'add_new'             => __( 'add new', 'twentythirteen' ),
            'edit_item'           => __( 'slider', 'twentythirteen' ),
            'update_item'         => __( 'slider', 'twentythirteen' ),
            'search_items'        => __( 'slider', 'twentythirteen' ),
            'not_found'           => __( 'Not Found', 'twentythirteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
        );

// Set other options for Custom Post Type

        $args = array(
            'label'               => __( 'slider', 'twentythirteen' ),
            'description'         => __( 'Movie news and reviews', 'twentythirteen' ),
            'labels'              => $labels,
        // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );

    // Registering your Custom Post Type
        register_post_type( 'slider', $args );

    }

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type1', 0 );


function custom_post_type2() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Services', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Services', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Services', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Services', 'twentythirteen' ),
        'all_items'           => __( 'Services', 'twentythirteen' ),
        'view_item'           => __( 'Services', 'twentythirteen' ),
        'add_new_item'        => __( 'add new', 'twentythirteen' ),
        'add_new'             => __( 'add new', 'twentythirteen' ),
        'edit_item'           => __( 'Services', 'twentythirteen' ),
        'update_item'         => __( 'Services', 'twentythirteen' ),
        'search_items'        => __( 'Services', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'Services', 'twentythirteen' ),
        'description'         => __( 'Movie news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );

    // Registering your Custom Post Type
    register_post_type( 'Services', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type2', 0 );

function gt_custom_post_type3(){
	register_post_type('gallery',
		array(
			'rewrite' => array('slug' => 'gallery'),
			'labels' => array(
				'name' => 'gallery',
				'signeur_name' => 'gallery',
				'add_new_item' => 'Add new gallery',
				'edit_item' => 'Edit gallery'
			),
			'hierarchical' => true,
          'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', 'revisions','post-thumbnails' ),
          'taxonomies' => array( 'category' ),
          'public' => true,
          'show_ui' => true,
          'show_in_menu' => true,
          'menu_position' => 5,

          'show_in_nav_menus' => true,
          'publicly_queryable' => true,
          'exclude_from_search' => true,
          'has_archive' => true,
          'query_var' => true,
          'can_export' => true,
          'rewrite' => true,
          'capability_type' => 'post'
      )
	);	
}
add_action('init', 'gt_custom_post_type3');

function custom_post_type4() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'experts', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'experts', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'experts', 'twentythirteen' ),
        'parent_item_colon'   => __( 'experts', 'twentythirteen' ),
        'all_items'           => __( 'experts', 'twentythirteen' ),
        'view_item'           => __( 'experts', 'twentythirteen' ),
        'add_new_item'        => __( 'add new', 'twentythirteen' ),
        'add_new'             => __( 'add new', 'twentythirteen' ),
        'edit_item'           => __( 'experts', 'twentythirteen' ),
        'update_item'         => __( 'experts', 'twentythirteen' ),
        'search_items'        => __( 'experts', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'experts', 'twentythirteen' ),
        'description'         => __( 'Movie news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );

    // Registering your Custom Post Type
    register_post_type( 'experts', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type4', 0 );



function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );






    function wpb_widgets_init() {

        register_sidebar( array(
            'name' => __( 'Main Sidebar', 'wpb' ),
            'id' => 'sidebar-1',
            'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );

        register_sidebar( array(
            'name' => __( 'First Footer Widget Area', 'tutsplus' ),
            'id' => 'first-footer-widget-area',
            'description' => __( 'The first footer widget area', 'tutsplus' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );

    }

    add_action( 'widgets_init', 'wpb_widgets_init' );  



    /*
        This function display post as per Order Ascending or descending
    */
    function filter_function(){
        $order = $_POST['order'];
        $page = $_POST['page'];   
            $args = array(
                'post_type' => 'experts',
                'order_by' => 'title',
                'posts_per_page' => 5,
                'order' => $order,
                'paged' => $page
            );
        
        $query = new WP_Query( $args );
        while( $query->have_posts() ) { 
            $query->the_post(); ?>
            <a href="<?php the_permalink(); ?>">
                <h2 style="color: green"><?php the_title(); ?></h2>
            </a>
            <div>    
            <p><?php the_content(); ?></p>
            </div>
            <?php
        }

        


        wp_reset_postdata();

       die();
    }   
add_action('wp_ajax_myfilter', 'filter_function');
add_action('wp_ajax_nopriv_myfilter', 'filter_function');


?>