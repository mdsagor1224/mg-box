<?php

function mgbox_bootstraping(){

load_theme_textdomain("mgbox");

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'title-tag' );

$mgbox_custom_header_details = array(
    'header-text' => true,
    'default-text-color' => '#222',
);
add_theme_support( 'custom-header', $mgbox_custom_header_details);

add_theme_support( 'post-thumbnails' );

register_nav_menus(
    array(
        'main-menu' => esc_html__( 'Primary', 'mgbox' ),
    ),
);

register_nav_menus(
    array(
        'menu-1' => esc_html__( 'footer', 'mgbox' ),
    ),
);

register_nav_menus(
    array(
        'menu-2' => esc_html__( 'Footer', 'mgbox' ),
    ),
);

add_theme_support(
    'html5',
    array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    )
);

add_theme_support(
    'custom-background',
    apply_filters(
        'mgbox_custom_background_args',
        array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )
    )
);

add_theme_support( 'customize-selective-refresh-widgets' );


add_theme_support(
    'custom-logo',
    array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    )
);





}
add_action('after_setup_theme','mgbox_bootstraping');



function mgbox_assets(){
    wp_enqueue_style("mgbox",get_stylesheet_uri());

    wp_enqueue_style("bootstrap", get_theme_file_uri("/assets/css/bootstrap.min.css"));
    wp_enqueue_style("all", get_theme_file_uri("/assets/css/all.css"));
    wp_enqueue_style("magnific", get_theme_file_uri("/assets/css/magnific-popup.css"));
    wp_enqueue_style("swiper", get_theme_file_uri("/assets/css/swiper-bundle.min.css"));
    wp_enqueue_style("theme-default", get_theme_file_uri("/assets/css/theme-default.css"));
    wp_enqueue_style("theme-style", get_theme_file_uri("/assets/css/style.css"));
    wp_enqueue_style("theme-responsive", get_theme_file_uri("/assets/css/responsive.css"));
    wp_enqueue_style("font-css", "//fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap");



    wp_enqueue_script("bootstrap-js",get_theme_file_uri("/assets/js/bootstrap.bundle.min.js"),array("jquery"),null,true);
    wp_enqueue_script("counterup-js",get_theme_file_uri("/assets/js/jquery.counterup.min.js"),array("jquery"),null,true);
    wp_enqueue_script("magnific-js",get_theme_file_uri("/assets/js/jquery.magnific-popup.min.js"),array("jquery"),null,true);
    wp_enqueue_script("swiper-js",get_theme_file_uri("/assets/js/swiper-bundle.min.js"),array("jquery"),null,true);
    wp_enqueue_script("waypoints-js",get_theme_file_uri("/assets/js/waypoints.min.js"),array("jquery"),null,true);
    wp_enqueue_script("isotope-js",get_theme_file_uri("/assets/js/isotope.pkgd.min.js"),array("jquery"),null,true);
    wp_enqueue_script("main-js",get_theme_file_uri("/assets/js/main.js"),array("jquery"),null,true);

    wp_enqueue_script("mgbox-js", get_template_directory_uri()."/assets/js/main.js", array("jquery","featherlight-js"), '0.0.1', true);
}
add_action("wp_enqueue_scripts","mgbox_assets");



// widget register

function mgbox_sidebar(){
    // register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Single Post Sidebar', 'mgbox' ),
	// 		'id'            => 'sidebar-1',
	// 		'description'   => esc_html__( 'Right Sidebar', 'mgbox' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );





    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer One', 'mgbox' ),
			'id'            => 'footer-one',
			'description'   => esc_html__( 'Footer One Sidevar', 'mgbox' ),
			'before_widget' => '<section id="%1$s" class="mg-ft-content %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Two', 'mgbox' ),
			'id'            => 'footer-two',
			'description'   => esc_html__( 'Footer Two Sidevar', 'mgbox' ),
			'before_widget' => '<section id="%1$s" class="mg-ft-menu %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="mg-title text-white pb-24">',
			'after_title'   => '</h3>',
		)
	);

    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Three', 'mgbox' ),
			'id'            => 'footer-three',
			'description'   => esc_html__( 'Footer Three Sidebar', 'mgbox' ),
			'before_widget' => '<section id="%1$s" class="mg-ft-menu %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="mg-title text-white pb-24">',
			'after_title'   => '</h3>',
		)
	);
}
add_action("widgets_init","mgbox_sidebar");




// function mgbox_the_excerpt(){
//     if(!post_passsword_required()){
//         return $excerpt;
//     }else{
//         echo get_the_password_form();
//     }
// }

// add_filter("the_excerpt","mgbox_the_excerpt");

function mgbox_protected_title_change(){
    return "%s";
}
add_filter("protected_title_format","mgbox_protected_title_change");



// nav menu css class 
function mgbox_menu_item_class($classes, $item){
    $classes[] = 'list-inline-item';

    return $classes;
}
add_filter('nav_menu_css_class', 'mgbox_menu_item_class', 10, 2);




