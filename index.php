<?php if( get_option( 'option_private_site' ) ) { if( ! is_user_logged_in() ) { get_template_part( 'wpkit/inc/login' ); return true; } }

/**
*
* Main page
*
* @package WPKit
* @author ALUMIN
* @copyright Copyright (C) Alumin.Agency
* @version WPKIT 3.0
*
*/

get_header(); ?>

	<?php //do_action( 'wk_widgets_layout' ); ?>

	<?php

	$wp_query = new WP_Query( 'post_type=page&order=ASC' );

	if( $wp_query->have_posts() ) : $i = 0; while( $wp_query->have_posts() ) : $i++; $wp_query->the_post(); ?>

		<?php get_template_part( 'parts/page-content' ); ?>

	<?php endwhile; endif; ?>


<?php get_footer(); ?>
