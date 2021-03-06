<?php

if ( ! isset( $content_width ) )
    $content_width = "1024";

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
function register_my_sidebars() {
  register_sidebar(1);
}
function create_my_post_types() {
  register_post_type('product', 
     array(
        'labels' => array( 
		'name' => __('Products'),
		'singular_name' => __('Product')
        ),
        'public' => true,
   	'has_archive' => 'store',
        'description' => __('Products I have for sale right now.'),
	'supports' => array('title', 'editor', 'revisions', 'publicize', 'excerpt', 'thumbnail', 'custom-fields')
     )
   );
}
add_action( 'init', 'register_my_menu' );
add_action( 'init', 'register_my_sidebars' );
add_action( 'init', 'create_my_post_types' );

add_theme_support( 'post-thumbnails' ); 

global $no_sidebar;
$no_sidebar = false;

function has_no_sidebar() {
  global $no_sidebar;
  return $no_sidebar;
}

function custom_thumbs()
{
    add_image_size( 'product-thumbnail', 400, 400, true ); // Hard crop to exact dimensions (crops sides or top and bottom)
}
add_action( 'after_setup_theme', 'custom_thumbs' );



function jeherve_custom_image( $media, $post_id, $args ) {
    if ( $media ) {
        return $media;
    } else {
        $permalink = get_permalink( $post_id );

	if(has_post_thumbnail($post_id)) {
		$url = apply_filters( 'jetpack_photon_url', get_the_post_thumbnail($post_id, 'size-medium') );
	} else {
		$url = apply_filters( 'jetpack_photon_url', get_bloginfo('template_url')+"/pics/logo-01.png" );
	}
     
        return array( array(
            'type'  => 'image',
            'from'  => 'custom_fallback',
            'src'   => esc_url( $url ),
            'href'  => $permalink,
        ) );
    }
}
add_filter( 'jetpack_images_get_images', 'jeherve_custom_image', 10, 3 );
?>
