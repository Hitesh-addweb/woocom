<?php
function add_styles(){
	wp_enqueue_style('mainstyle',get_stylesheet_uri());//it will get the main file of theme template automatically and attach it
	wp_enqueue_style('headercss',get_template_directory_uri().'/css/headercss.css');
	wp_enqueue_style('style',get_template_directory_uri().'/css/style.min.css');
	wp_enqueue_style('headercss2',get_template_directory_uri().'/css/headercss2.css');
	wp_enqueue_style('headercss3',get_template_directory_uri().'/css/headercss3.css');
	wp_enqueue_style('headercss4',get_template_directory_uri().'/css/headercss4.css');
	wp_enqueue_style('headercss5',get_template_directory_uri().'/css/headercss5.css');
	wp_enqueue_style('styles',get_template_directory_uri().'/css/styles.css');
	wp_enqueue_style('sty',get_template_directory_uri().'/css/style.css');
	wp_enqueue_style('bootstrap.min.css',get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap-slider.min.css',get_template_directory_uri().'/css/bootstrap-slider.min.css');
	wp_enqueue_style('loanshop-style.css',get_template_directory_uri().'/css/loanshop-style.css');
	wp_enqueue_style('owl.carousel.min.css',get_template_directory_uri().'/css/owl.carousel.min.css');
	wp_enqueue_style('font-awesome.min.css',get_template_directory_uri().'/css/font-awesome.min.css');
	wp_enqueue_style('ocss.css',get_template_directory_uri().'/css/ocss.css');
	wp_enqueue_style('js_composer.min.css',get_template_directory_uri().'/css/js_composer.min.css');
	wp_enqueue_style('js_composer_front-inline-css.css',get_template_directory_uri().'/css/js_composer_front-inline-css.css');
	wp_enqueue_style('prettyPhoto.min.css',get_template_directory_uri().'/css/prettyPhoto.min.css');
	wp_enqueue_style('owl.min.css',get_template_directory_uri().'/css/owl.min.css');
	wp_enqueue_style('animate.min.css',get_template_directory_uri().'/css/animate.min.css');
	wp_enqueue_style('custom.css',get_template_directory_uri().'/css/custom.css');
	wp_enqueue_style('customcss2.css',get_template_directory_uri().'/css/customcss2.css');



    //wp_enqueue_script('jquery.min.js',get_template_directory_uri().'/js/jquery.min.js',array(),'1.1',true);
	wp_enqueue_script('headerjs',get_template_directory_uri().'/js/headerjs.js',array(),'1.1',true);
	wp_enqueue_script('jquery.js',get_template_directory_uri().'/js/jquery.js',array(),'1.1',true);
	wp_enqueue_script('jquery-migrate.min.js',get_template_directory_uri().'/js/jquery-migrate.min.js',array(),'1.1',true);
	wp_enqueue_script('custom1.js',get_template_directory_uri().'/js/custom1.js',array(),'1.1',true);
	wp_enqueue_script('custom2.js',get_template_directory_uri().'/js/custom2.js',array(),'1.1',true);
	wp_enqueue_script('custom3.js',get_template_directory_uri().'/js/custom3.js',array(),'1.1',true);
	wp_enqueue_script('scripts.js',get_template_directory_uri().'/js/scripts.js',array(),'1.1',true);
	wp_enqueue_script('bootstrap.min.js',get_template_directory_uri().'/js/bootstrap.min.js',array(),'1.1',true);
	wp_enqueue_script('owl.carousel.min.js',get_template_directory_uri().'/js/owl.carousel.min.js',array(),'1.1',true);
	wp_enqueue_script('loanshop-interface.js',get_template_directory_uri().'/js/loanshop-interface.js',array(),'1.1',true);
	wp_enqueue_script('bootstrap-slider.min.js',get_template_directory_uri().'/js/bootstrap-slider.min.js',array(),'1.1',true);
	wp_enqueue_script('wp-embed.min.js',get_template_directory_uri().'/js/wp-embed.min.js',array(),'1.1',true);
	wp_enqueue_script('js_composer_front.min.js',get_template_directory_uri().'/js/js_composer_front.min.js',array(),'1.1',true);
	wp_enqueue_script('jquery.prettyPhoto.min.js',get_template_directory_uri().'/js/jquery.prettyPhoto.min.js',array(),'1.1',true);
	wp_enqueue_script('imagesloaded.pkgd.min.js',get_template_directory_uri().'/js/imagesloaded.pkgd.min.js',array(),'1.1',true);
	wp_enqueue_script('underscore.min.js',get_template_directory_uri().'/js/underscore.min.js',array(),'1.1',true);
	wp_enqueue_script('vc-waypoints.min.js',get_template_directory_uri().'/js/vc-waypoints.min.js',array(),'1.1',true);
	wp_enqueue_script('vc_grid.min.js',get_template_directory_uri().'/js/vc_grid.min.js',array(),'1.1',true);
	wp_enqueue_script('custom4.js',get_template_directory_uri().'/js/custom4.js',array(),'1.1',true);
	wp_enqueue_script('forms-api.min.js',get_template_directory_uri().'/js/forms-api.min.js',array(),'1.1',true);



}
add_action("wp_enqueue_scripts","add_styles"); 




function add_nav_menu(){   // register navigation menu

	register_nav_menus(
		array(
			'primary-menu'=>__('primary menu'),
			'footer-menu'=>__('footer menu')
		));
}
add_action('init','add_nav_menu');


function wpb_widgets_init() {    //register widgets for the header
register_sidebar( array(
'name' => 'Header Widget',
'id' => 'header-widget',
'before_widget' => '<div class="hw-widget">',
'after_widget' => '</div>',
'before_title' => '<h2 class="hw-title">',
'after_title' => '</h2>',
) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );


function themename_custom_logo_setup() {  //custom logo for the site
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

//FOOTER
register_sidebar( array(
'name' => 'EMI widget',
'id' => 'emi-widget',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 1',
'id' => 'footer-sidebar-1',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 2',
'id' => 'footer-sidebar-2',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 3',
'id' => 'footer-sidebar-3',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 4',
'id' => 'footer-sidebar-4',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 5',
'id' => 'footer-sidebar-5',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 6',
'id' => 'footer-sidebar-6',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 7',
'id' => 'footer-sidebar-7',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 8',
'id' => 'footer-sidebar-8',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 9',
'id' => 'footer-sidebar-9',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Single page menu',
'id' => 'single-page-menu',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Single page widget',
'id' => 'single-page-widget',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'contact page widget',
'id' => 'contact-page-widget',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'left sidebar tags widget',
'id' => 'left-sidebar-tags-widget',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'left sidebar meta widget',
'id' => 'left-sidebar-meta-widget',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'left sidebar archive widget',
'id' => 'left-sidebar-archive-widget',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'left sidebar recentcm widget',
'id' => 'left-sidebar-recentcm-widget',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );



function my_custom_post_bank() {  //custom post type BANK
	$labels = array(
		'name'               => 'Bank',
		'singular_name'      => 'Bank',
		'menu_name'          => 'Bank',
		'name_admin_bar'     => 'Bank',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Bank',
		'new_item'           => 'New Bank',
		'edit_item'          => 'Edit Bank',
		'view_item'          => 'View Bank',
		'all_items'          => 'All Bank',
		'search_items'       => 'Search Bank',
		'parent_item_colon'  => 'Parent Bank:',
		'not_found'          => 'No Bank found.',
		'not_found_in_trash' => 'No Bank found in Trash.'
	);

	$args = array( 
		'public'      => true, 
		'labels'      => $labels,
		'description' => 'My yummy recipes will be published using this post type'
	);
    	register_post_type( 'Bank', $args );
}
add_action( 'init', 'my_custom_post_Bank' );


function custom_post_type1() {

// Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'slider1', 'Post Type General Name', 'twentythirteen' ),
            'singular_name'       => _x( 'slider1', 'Post Type Singular Name', 'twentythirteen' ),
            'menu_name'           => __( 'slider1', 'twentythirteen' ),
            'parent_item_colon'   => __( 'slider1', 'twentythirteen' ),
            'all_items'           => __( 'slider1', 'twentythirteen' ),
            'view_item'           => __( 'slider1', 'twentythirteen' ),
            'add_new_item'        => __( 'add new', 'twentythirteen' ),
            'add_new'             => __( 'add new', 'twentythirteen' ),
            'edit_item'           => __( 'slider1', 'twentythirteen' ),
            'update_item'         => __( 'slider1', 'twentythirteen' ),
            'search_items'        => __( 'slider1', 'twentythirteen' ),
            'not_found'           => __( 'Not Found', 'twentythirteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
        );

// Set other options for Custom Post Type

        $args = array(
            'label'               => __( 'slider1', 'twentythirteen' ),
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
        'taxonomies'          => array('post_tag'),
    );

    // Registering your Custom Post Type
        register_post_type( 'slider1', $args );

    }

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type1', 0 );



function crunchify_create_deals_custom_taxonomy2() {
 
  $labels = array(
    'name' => _x( 'loan', 'taxonomy general name' ),
    'singular_name' => _x( 'loan', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'loan' ),
  );    
 
  register_taxonomy('loan',array('slider1'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}
add_action( 'init', 'crunchify_create_deals_custom_taxonomy2', 0 );


function mytheme_post_thumbnails() {  //to add thumbnail to the post
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );


function custom_post_type2() {

// Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'facility', 'Post Type General Name', 'twentythirteen' ),
            'singular_name'       => _x( 'facility', 'Post Type Singular Name', 'twentythirteen' ),
            'menu_name'           => __( 'facility', 'twentythirteen' ),
            'parent_item_colon'   => __( 'facility', 'twentythirteen' ),
            'all_items'           => __( 'facility', 'twentythirteen' ),
            'view_item'           => __( 'facility', 'twentythirteen' ),
            'add_new_item'        => __( 'add new', 'twentythirteen' ),
            'add_new'             => __( 'add new', 'twentythirteen' ),
            'edit_item'           => __( 'facility', 'twentythirteen' ),
            'update_item'         => __( 'facility', 'twentythirteen' ),
            'search_items'        => __( 'facility', 'twentythirteen' ),
            'not_found'           => __( 'Not Found', 'twentythirteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
        );

// Set other options for Custom Post Type

        $args = array(
            'label'               => __( 'facility', 'twentythirteen' ),
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
        register_post_type( 'facility', $args );

    }

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type2', 0 );


function custom_post_type3() {

// Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'slider2', 'Post Type General Name', 'twentythirteen' ),
            'singular_name'       => _x( 'slider2', 'Post Type Singular Name', 'twentythirteen' ),
            'menu_name'           => __( 'slider2', 'twentythirteen' ),
            'parent_item_colon'   => __( 'slider2', 'twentythirteen' ),
            'all_items'           => __( 'slider2', 'twentythirteen' ),
            'view_item'           => __( 'slider2', 'twentythirteen' ),
            'add_new_item'        => __( 'add new', 'twentythirteen' ),
            'add_new'             => __( 'add new', 'twentythirteen' ),
            'edit_item'           => __( 'slider2', 'twentythirteen' ),
            'update_item'         => __( 'slider2', 'twentythirteen' ),
            'search_items'        => __( 'slider2', 'twentythirteen' ),
            'not_found'           => __( 'Not Found', 'twentythirteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
        );

// Set other options for Custom Post Type

        $args = array(
            'label'               => __( 'slider2', 'twentythirteen' ),
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
        register_post_type( 'slider2', $args );

    }

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type3', 0 );

function custom_post_type4() {

// Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'slider3', 'Post Type General Name', 'twentythirteen' ),
            'singular_name'       => _x( 'slider3', 'Post Type Singular Name', 'twentythirteen' ),
            'menu_name'           => __( 'slider3', 'twentythirteen' ),
            'parent_item_colon'   => __( 'slider3', 'twentythirteen' ),
            'all_items'           => __( 'slider3', 'twentythirteen' ),
            'view_item'           => __( 'slider3', 'twentythirteen' ),
            'add_new_item'        => __( 'add new', 'twentythirteen' ),
            'add_new'             => __( 'add new', 'twentythirteen' ),
            'edit_item'           => __( 'slider3', 'twentythirteen' ),
            'update_item'         => __( 'slider3', 'twentythirteen' ),
            'search_items'        => __( 'slider3', 'twentythirteen' ),
            'not_found'           => __( 'Not Found', 'twentythirteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
        );

// Set other options for Custom Post Type

        $args = array(
            'label'               => __( 'slider3', 'twentythirteen' ),
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
        register_post_type( 'slider3', $args );

    }

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type4', 0 );

function custom_post_type5() {

// Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'slider4', 'Post Type General Name', 'twentythirteen' ),
            'singular_name'       => _x( 'slider4', 'Post Type Singular Name', 'twentythirteen' ),
            'menu_name'           => __( 'slider4', 'twentythirteen' ),
            'parent_item_colon'   => __( 'slider4', 'twentythirteen' ),
            'all_items'           => __( 'slider4', 'twentythirteen' ),
            'view_item'           => __( 'slider4', 'twentythirteen' ),
            'add_new_item'        => __( 'add new', 'twentythirteen' ),
            'add_new'             => __( 'add new', 'twentythirteen' ),
            'edit_item'           => __( 'slider4', 'twentythirteen' ),
            'update_item'         => __( 'slider4', 'twentythirteen' ),
            'search_items'        => __( 'slider4', 'twentythirteen' ),
            'not_found'           => __( 'Not Found', 'twentythirteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
        );

// Set other options for Custom Post Type

        $args = array(
            'label'               => __( 'slider4', 'twentythirteen' ),
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
        register_post_type( 'slider4', $args );

    }

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type5', 0 );

function custom_post_type6() {

// Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'slider5', 'Post Type General Name', 'twentythirteen' ),
            'singular_name'       => _x( 'slider5', 'Post Type Singular Name', 'twentythirteen' ),
            'menu_name'           => __( 'slider5', 'twentythirteen' ),
            'parent_item_colon'   => __( 'slider5', 'twentythirteen' ),
            'all_items'           => __( 'slider5', 'twentythirteen' ),
            'view_item'           => __( 'slider5', 'twentythirteen' ),
            'add_new_item'        => __( 'add new', 'twentythirteen' ),
            'add_new'             => __( 'add new', 'twentythirteen' ),
            'edit_item'           => __( 'slider5', 'twentythirteen' ),
            'update_item'         => __( 'slider5', 'twentythirteen' ),
            'search_items'        => __( 'slider5', 'twentythirteen' ),
            'not_found'           => __( 'Not Found', 'twentythirteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
        );

// Set other options for Custom Post Type

        $args = array(
            'label'               => __( 'slider5', 'twentythirteen' ),
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
        register_post_type( 'slider5', $args );

    }

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type6', 0 );


function custom_post_type7() {

// Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'post2', 'Post Type General Name', 'twentythirteen' ),
            'singular_name'       => _x( 'post2', 'Post Type Singular Name', 'twentythirteen' ),
            'menu_name'           => __( 'post2', 'twentythirteen' ),
            'parent_item_colon'   => __( 'post2', 'twentythirteen' ),
            'all_items'           => __( 'post2', 'twentythirteen' ),
            'view_item'           => __( 'post2', 'twentythirteen' ),
            'add_new_item'        => __( 'add new', 'twentythirteen' ),
            'add_new'             => __( 'add new', 'twentythirteen' ),
            'edit_item'           => __( 'post2', 'twentythirteen' ),
            'update_item'         => __( 'post2', 'twentythirteen' ),
            'search_items'        => __( 'post2', 'twentythirteen' ),
            'not_found'           => __( 'Not Found', 'twentythirteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
        );

// Set other options for Custom Post Type

        $args = array(
            'label'               => __( 'post2', 'twentythirteen' ),
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
        register_post_type( 'post2', $args );

    }

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type7', 0 );


function custom_post_type8() {

// Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'career', 'Post Type General Name', 'twentythirteen' ),
            'singular_name'       => _x( 'career', 'Post Type Singular Name', 'twentythirteen' ),
            'menu_name'           => __( 'career', 'twentythirteen' ),
            'parent_item_colon'   => __( 'career', 'twentythirteen' ),
            'all_items'           => __( 'career', 'twentythirteen' ),
            'view_item'           => __( 'career', 'twentythirteen' ),
            'add_new_item'        => __( 'add new', 'twentythirteen' ),
            'add_new'             => __( 'add new', 'twentythirteen' ),
            'edit_item'           => __( 'career', 'twentythirteen' ),
            'update_item'         => __( 'career', 'twentythirteen' ),
            'search_items'        => __( 'career', 'twentythirteen' ),
            'not_found'           => __( 'Not Found', 'twentythirteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
        );

// Set other options for Custom Post Type

        $args = array(
            'label'               => __( 'career', 'twentythirteen' ),
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
        'taxonomies'          => array('post_tag'),
    );

    // Registering your Custom Post Type
        register_post_type( 'career', $args );

    }

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type8', 0 );

function crunchify_create_deals_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Types' ),
  );    
 
  register_taxonomy('types',array('career'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}
add_action( 'init', 'crunchify_create_deals_custom_taxonomy', 0 );



function custom_post_type9() {

// Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'pricing', 'Post Type General Name', 'twentythirteen' ),
            'singular_name'       => _x( 'pricing', 'Post Type Singular Name', 'twentythirteen' ),
            'menu_name'           => __( 'pricing', 'twentythirteen' ),
            'parent_item_colon'   => __( 'pricing', 'twentythirteen' ),
            'all_items'           => __( 'pricing', 'twentythirteen' ),
            'view_item'           => __( 'pricing', 'twentythirteen' ),
            'add_new_item'        => __( 'add new', 'twentythirteen' ),
            'add_new'             => __( 'add new', 'twentythirteen' ),
            'edit_item'           => __( 'pricing', 'twentythirteen' ),
            'update_item'         => __( 'pricing', 'twentythirteen' ),
            'search_items'        => __( 'pricing', 'twentythirteen' ),
            'not_found'           => __( 'Not Found', 'twentythirteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
        );

// Set other options for Custom Post Type

        $args = array(
            'label'               => __( 'pricing', 'twentythirteen' ),
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
        'taxonomies'          => array('post_tag'),
    );

    // Registering your Custom Post Type
        register_post_type( 'pricing', $args );

    }

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type9', 0 );


function custom_post_type10() {

// Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'blog', 'Post Type General Name', 'twentythirteen' ),
            'singular_name'       => _x( 'blog', 'Post Type Singular Name', 'twentythirteen' ),
            'menu_name'           => __( 'blog', 'twentythirteen' ),
            'parent_item_colon'   => __( 'blog', 'twentythirteen' ),
            'all_items'           => __( 'blog', 'twentythirteen' ),
            'view_item'           => __( 'blog', 'twentythirteen' ),
            'add_new_item'        => __( 'add new', 'twentythirteen' ),
            'add_new'             => __( 'add new', 'twentythirteen' ),
            'edit_item'           => __( 'blog', 'twentythirteen' ),
            'update_item'         => __( 'blog', 'twentythirteen' ),
            'search_items'        => __( 'blog', 'twentythirteen' ),
            'not_found'           => __( 'Not Found', 'twentythirteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
        );

// Set other options for Custom Post Type

        $args = array(
            'label'               => __( 'blog', 'twentythirteen' ),
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
        'taxonomies'          => array('post_tag'),
    );

    // Registering your Custom Post Type
        register_post_type( 'blog', $args );

    }

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type10', 0 );

function crunchify_create_deals_custom_taxonomy3() {
 
  $labels = array(
    'name' => _x( 'blogtype', 'taxonomy general name' ),
    'singular_name' => _x( 'blogtype', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'blogtype' ),
  );    
 
  register_taxonomy('blogtype',array('blog'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}
add_action( 'init', 'crunchify_create_deals_custom_taxonomy3', 0 );

function left_header_section(){

    $html='<section id="inner_header" class="section-padding parallex-bg" style="background-image:url('. get_field('bgimg').')"><div class="container"><div class="div_zindex"><h1>'.get_field('title').'</h1> <div class="breadcrumb"><ul><li><a class="bread-link bread-home" href="http://themes.webmasterdriver.net/loanshop">Home</a></li><li class="separator">/</li>
  <li>'.get_field('title').'</li></ul></div></div></div><div class="dark-overlay"></div></section>';

  return $html;


}

add_shortcode('header-section','left_header_section');

function left_post_query_section(){
   

    $html = '<article id="post-870" class="post_wrap post_listing"><h2><a href="http://themes.webmasterdriver.net/loanshop/how-to-reduce-your-home-loan-rate/">'. get_the_title().'</a></h2><div class="post_elements"><ul><li><i class="fa fa-user" aria-hidden="true"></i><a href="http://themes.webmasterdriver.net/loanshop/author/admin/">'.  get_the_author().'</a></li><li><i class="fa fa-calendar-check-o" aria-hidden="true"></i><a href="http://themes.webmasterdriver.net/loanshop/how-to-reduce-your-home-loan-rate/">'. get_the_date( 'd/m/Y' ).'</a></li><li><i class="fa fa-tags" aria-hidden="true"></i><a href="http://themes.webmasterdriver.net/loanshop/category/home-loan/" rel="category tag">';

    $terms = get_the_terms( $post->ID , 'blogtype' );
    foreach ( $terms as $term ) {
        echo $term->name;
    }

    $html.='</a></li><li><i class="fa fa-comment" aria-hidden="true"></i><a href="http://themes.webmasterdriver.net/loanshop/how-to-reduce-your-home-loan-rate/#respond">0 Comments</a></li></ul></div><a href="http://themes.webmasterdriver.net/loanshop/how-to-reduce-your-home-loan-rate/"><div class="post_img"><img width="800" height="580" src="'.get_the_post_thumbnail_url().'" class="img-responsive center-block wp-post-image" alt="" /></div></a><p>'.get_the_excerpt().'</p><a href="http://themes.webmasterdriver.net/loanshop/how-to-reduce-your-home-loan-rate/" class="btn-link">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></article>';
    
    
    return $html;
}

add_shortcode('header_query','left_post_query_section');







?>