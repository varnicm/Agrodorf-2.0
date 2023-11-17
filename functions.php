<?php

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1568, 9999 );

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function my_custom_sidebar() {
    
    register_sidebar(
        array (
            'name' => __( 'Custom Sidebar', 'scholarfolio' ),
            'id' => 'custom-sidebar',
            'description' => __( 'Custom Sidebar Widget Area', 'scholarfolio' ),
            'before_widget' => '<div id="%1$s" class="card mb-3 bg-secondary-subtle card-post widget %2$s"><div class="card-body">',
            'after_widget' => "</div></div>",
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );


?>