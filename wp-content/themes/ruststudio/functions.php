<?php
   // 2. This is the functions.php
 
// 1. load stylesheets
function load_stylesheets() {
	
	wp_register_style('bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css', array(), 1, 'all');
	wp_enqueue_style('bootstrap');
	
	wp_register_style('fonts', get_template_directory_uri() .'/css/fonts.css', array(), 1, 'all');
	wp_enqueue_style('fonts');
	
	wp_register_style('styles', get_template_directory_uri() .'/css/styles.css', array(), 1, 'all');
	wp_enqueue_style('styles');
	
	wp_register_style('owl', get_template_directory_uri() .'/css/owl.carousel.min.css', array(), 1, 'all');
	wp_enqueue_style('owl');
	
	wp_register_style('aos', get_template_directory_uri() .'/css/aos.css', array(), 1, 'all');
	wp_enqueue_style('aos');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');
	
 
 // 2. load javascripts
function addjs() {
	  
	// wp_deregister_script('jquery');
	
	//wp_register_script('jquery', get_template_directory_uri() .'/plugin-frameworks/jquery-3.2.1.min.js', array(), 1, 1, 1);
	//wp_enqueue_script('jquery');
	
	wp_register_script('bootstrap', get_template_directory_uri() .'/plugin-frameworks/bootstrap.min.js', array(), 1, 1, 1);
	wp_enqueue_script('bootstrap');
	
	wp_register_script('jquery-ui', get_template_directory_uri() .'/plugin-frameworks/jquery-ui.min.js', array(), 1, 1, 1);
	wp_enqueue_script('jquery-ui');
	
	wp_register_script('jquery-easing', get_template_directory_uri() .'/plugin-frameworks/jquery.easing.min.js', array(), 1, 1, 1);
	wp_enqueue_script('jquery-easing');
	
	wp_register_script('owl', get_template_directory_uri() .'/plugin-frameworks/owl.carousel.js', array(), 1, 1, 1);
	wp_enqueue_script('owl');
	
	wp_register_script('animations', get_template_directory_uri() .'/plugin-frameworks/aos.js', array(), 1, 1, 1);
	wp_enqueue_script('animations');
	
	wp_register_script('scripts', get_template_directory_uri() .'/plugin-frameworks/functions.js', array(), 1, 1, 1);
	wp_enqueue_script('functions');
	
	wp_register_script('alerts', get_template_directory_uri() .'/plugin-frameworks/alerts.js', array(), 1, 1, 1);
	wp_enqueue_script('alerts');
	
	// using custom javascript
	wp_register_script('custom', get_template_directory_uri() .'/custom.js', array(), 1, 1, 1);
	wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'addjs');


// 3. Custom image sizes
add_image_size('product_image_small', 400, 700, false);
add_image_size('product_image_large', 700, 700, false);

// 4. Add menus support
add_theme_support('menus');

// 5. Setup menu locations
register_nav_menus(
	array(
		'top-menu' => __('Top Menu', 'theme'),
		'footer-menu' => __('Footer Menu', 'theme'),
		)
);

// 6. Featured Images
add_theme_support('post-thumbnails');

// 7. Wordpress bootstrap Menu
// register the nav
function register_my_menu() {
	register_nav_menu('topnav',__( 'topnav' ));
}
add_action( 'init', 'register_my_menu' );

// let's add "*active*" as a class to the li
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

// let's add our custom class to the actual link tag    
function atg_menu_classes($classes, $item, $args) {
	  if($args->theme_location == 'topnav') {
		$classes[] = 'nav-link'  ;
	  }
	  return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link" ', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');


// 8. Register Sidebars
function twentytwenty_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #1', 'twentytwenty' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);

	// Footer #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #2', 'twentytwenty' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'twentytwenty' ),
			)
		)
	);

}

add_action( 'widgets_init', 'twentytwenty_sidebar_registration' );

// 9. ACF Options Page - Use this to include filled groups globally
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' => 'Main Theme General Settings',
		'menu_title' => 'Main Theme Settings', 
		'menu_slug' => 'theme-gemeral-settings', 
		'capability' => 'edit_posts',
		'redirect' => false
	));
}

?>