<?php
/**
 * The template for displaying all pages.
 *
 * @package flatsome
 * 
 * Template Name:home
 */


if(flatsome_option('pages_template') != 'default') {
	
	// Get default template from theme options.
	get_template_part('page', flatsome_option('pages_template'));
	return;

} else {

get_header();

while ( have_posts() ) : the_post();

get_template_part( 'template-parts/content', 'page-home' );

endwhile;

get_footer();

}

?>
