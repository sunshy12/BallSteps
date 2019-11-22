<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */

function hatyai_today_scripts() {
	wp_enqueue_style( 'ballstep-style', get_stylesheet_uri() );
	wp_enqueue_style( 'ballstep-bootstrap-css', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css',false,'1.1','all');
	wp_enqueue_style( 'ballstep-animate-css', get_template_directory_uri() . '/node_modules/animate.css/animate.min.css',false,'1.1','all');
	
	
	wp_enqueue_script( 'ballstep-jquery', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ballstep-popper', get_template_directory_uri() . '/node_modules/popper.js/dist/umd/popper.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ballstep-bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array(), '20151215', true );
	

	

	wp_enqueue_script( 'ballstep-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'ballstep-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_localize_script( 'hatyai_today-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'hatyai_today' ),
		'collapse' => __( 'collapse child menu', 'hatyai_today' ),
	) );
}