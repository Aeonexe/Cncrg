<?php if( get_option( 'option_private_site' ) ) { if( ! is_user_logged_in() ) { get_template_part( 'wpkit/inc/login' ); return true; } }

/**
*
* Página
*
* @package WPKit
* @author ALUMIN
* @copyright Copyright (C) Alumin.Agency
* @version WPKIT 3.0
*
*/

get_header(); ?>

      <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

      	<?php get_template_part( 'parts/page-content' ); ?>

      <?php endwhile; endif; ?>

<?php get_footer(); ?>
