<?php
/*
*
*  Contiene las funciones implementadas en el template.
*
* @package WPKit
* @author ALUMIN
* @version WPKIT 2.0
*/

/*******************************************************************************
WPKit */

	include_once( get_stylesheet_directory() . '/wpkit/config.php' );


/***************************************************************************
* Página de opciones ACF */

	if( function_exists('acf_add_options_page') ) {

		acf_add_options_page(array(
			'page_title' 	=> 'Información de la empresa',
			'menu_title'	=> 'Info Concierge',
			'menu_slug' 	=> 'informacion',
			'capability'	=> 'edit_posts',
			'redirect'		=> false,
			'icon_url'		=> 'dashicons-marker',
		 	'position'		=> '50',
		));

		// acf_add_options_sub_page(array(
		// 	'page_title' 	=> 'Herramientas',
		// 	'menu_title'	=> 'Herramientas',
		// 	'parent_slug'	=> 'opciones-de-panel',
		// ));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Sitio',
			'menu_title'	=> 'Sitio',
			'parent_slug'	=> 'themes.php',
		));

	}

/* ***********************************************************************************************************************
* Custom post type */

	// 'Custom_post_type_name'

		if ( ! function_exists('wk_custom_post_type') ) {

			// Register Custom Post Type
			function wk_custom_post_type() {

				$ctp_name = 'paciente';
				$name = 'Paciente';
				$names = 'Pacientes';

				$labels = array(
					'name'                  => _x( $names, 'Post Type General Name', 'wpkit_text_domain' ),
					'singular_name'         => _x( $name, 'Post Type Singular Name', 'wpkit_text_domain' ),
					'menu_name'             => __( $names, 'wpkit_text_domain' ),
					'name_admin_bar'        => __( $names, 'wpkit_text_domain' ),
					'archives'              => __( $names, 'wpkit_text_domain' ),
					'attributes'            => __( $names . ' Attributes', 'text_domain' ),
					// 'parent_item_colon'     => __( 'Superior', 'wpkit_text_domain' ),
					// 'all_items'             => __( 'Todo', 'wpkit_text_domain' ),
					// 'add_new_item'          => __( 'Añadir', 'wpkit_text_domain' ),
					'add_new'               => __( 'Nuevo testimonio', 'wpkit_text_domain' ),
					// 'new_item'              => __( 'Nuevo', 'wpkit_text_domain' ),
					// 'edit_item'             => __( 'Editar', 'wpkit_text_domain' ),
					// 'update_item'           => __( 'Actualizar', 'wpkit_text_domain' ),
					// 'view_item'             => __( 'Ver', 'wpkit_text_domain' ),
					// 'search_items'          => __( 'Buscar', 'wpkit_text_domain' ),
					// 'not_found'             => __( 'No se encontró', 'wpkit_text_domain' ),
					// 'not_found_in_trash'    => __( 'No se encontró en la papelera', 'wpkit_text_domain' ),
					// 'featured_image'        => __( 'Imagen destacada', 'wpkit_text_domain' ),
					// 'set_featured_image'    => __( 'Seleccionar como imagen destacada', 'wpkit_text_domain' ),
					// 'remove_featured_image' => __( 'Quitar imagen destacada', 'wpkit_text_domain' ),
					// 'use_featured_image'    => __( 'Usar como imagen destacada', 'wpkit_text_domain' ),
					// 'insert_into_item'      => __( 'Insertar', 'wpkit_text_domain' ),
					// 'uploaded_to_this_item' => __( 'Adjuntas a esta publicación', 'wpkit_text_domain' ),
					// 'items_list'            => __( 'Listado de elementos', 'wpkit_text_domain' ),
					// 'items_list_navigation' => __( 'Navegación por items', 'wpkit_text_domain' ),
					// 'filter_items_list'     => __( 'Filtrar por item en el listado', 'wpkit_text_domain' ),
				);
				$rewrite = array(
					'slug'                  => $ctp_name,
					'with_front'            => true,
					'pages'                 => true,
					'feeds'                 => true,
				);
				// Requiere habilitar capabilities para el rol de usuario
				// $capabilities = array(
				// 	'edit_post'          => 'edit_articulo',
				// 	'read_post'          => 'read_articulo',
				// 	'delete_post'        => 'delete_articulo',
				// 	'edit_posts'         => 'edit_articulos',
				// 	'edit_others_posts'  => 'edit_others_articulos',
				// 	'publish_posts'      => 'publish_articulos',
				// 	'read_private_posts' => 'read_private_articulos',
				// 	'create_posts'       => 'edit_articulos',
				// );
				$args = array(
					'label'                 => __( $name, 'wpkit_text_domain' ),
					'description'           => __( 'Publicaciones en el sitio', 'wpkit_text_domain' ),
					'labels'                => $labels,
					'supports'              => array(
													'title',
													// 'editor',
													// 'excerpt',
													'author',
													'thumbnail',
													// 'comments',
													// 'trackbacks',
													// 'revisions',
													// 'custom-fields',
													// 'page-attributes',
													// 'post-formats',
												),
					// 'taxonomies'            => array(
					// 								'post_tag',
					// 								'category'
					// 							),
					'hierarchical'          => true,
					'public'                => true,
					'show_ui'               => true,
					'menu_position'         => 5,
					'menu_icon'             => 'dashicons-admin-post',
					'show_in_menu'          => true,
					'show_in_admin_bar'     => true,
					'show_in_nav_menus'     => true,
					'can_export'            => true,
					'has_archive'           => true,
					'exclude_from_search'   => false,
					'publicly_queryable'    => true,
					'rewrite'               => $rewrite,
					// 'capabilities'          => $capabilities,
					'show_in_rest'			=> true,
				);
				register_post_type( $ctp_name, $args );

			}
			add_action( 'init', 'wk_custom_post_type', 0 );
		}

		// Taxonomías

		// Register Custom Taxonomy
			// function custom_taxonomy() {
			//
			// 	$labels = array(
			// 		'name'                       => _x( 'Tipo de pacientes', 'Taxonomy General Name', 'text_domain' ),
			// 		'singular_name'              => _x( 'Tipo de paciente', 'Taxonomy Singular Name', 'text_domain' ),
			// 		'menu_name'                  => __( 'Tipo de paciente', 'text_domain' ),
			// 		// 'all_items'                  => __( 'All Items', 'text_domain' ),
			// 		// 'parent_item'                => __( 'Parent Item', 'text_domain' ),
			// 		// 'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
			// 		// 'new_item_name'              => __( 'New Item Name', 'text_domain' ),
			// 		// 'add_new_item'               => __( 'Add New Item', 'text_domain' ),
			// 		// 'edit_item'                  => __( 'Edit Item', 'text_domain' ),
			// 		// 'update_item'                => __( 'Update Item', 'text_domain' ),
			// 		// 'view_item'                  => __( 'View Item', 'text_domain' ),
			// 		// 'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
			// 		// 'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
			// 		// 'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
			// 		// 'popular_items'              => __( 'Popular Items', 'text_domain' ),
			// 		// 'search_items'               => __( 'Search Items', 'text_domain' ),
			// 		// 'not_found'                  => __( 'Not Found', 'text_domain' ),
			// 		// 'no_terms'                   => __( 'No items', 'text_domain' ),
			// 		// 'items_list'                 => __( 'Items list', 'text_domain' ),
			// 		// 'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
			// 	);
			// 	$args = array(
			// 		'labels'                     => $labels,
			// 		'hierarchical'               => true,
			// 		'public'                     => true,
			// 		'show_ui'                    => true,
			// 		'show_admin_column'          => true,
			// 		'show_in_nav_menus'          => true,
			// 		'show_tagcloud'              => true,
			// 	);
			// 	register_taxonomy( 'taxonomy', array( 'paciente' ), $args );
			//
			// }
			// add_action( 'init', 'custom_taxonomy', 0 );

		// Añade capabilities al rol de usuario
		// Necesario si se añade capabilities como argumento en el post type
		// function add_theme_caps() {
		//     // gets the administrator role
		//     $admins = get_role( 'editor' );

		//     $admins->add_cap( 'edit_articulo' );
		//     $admins->add_cap( 'read_articulo' );
		//     $admins->add_cap( 'delete_articulo' );
		//     $admins->add_cap( 'edit_articulos' );
		//     $admins->add_cap( 'edit_others_articulos' );
		//     $admins->add_cap( 'publish_articulos' );
		//     $admins->add_cap( 'read_private_articulos' );
		//     $admins->add_cap( 'edit_articulos' );

		// }
		// add_action( 'admin_init', 'add_theme_caps');


/*******************************************************************************
Shortcodes */

// Boton

	function ui_button_shortcode( $atts, $content = null ) {

		// ob_start();

			$default = get_bloginfo('url');

			extract(shortcode_atts(array(
				'href' => '',
			), $atts));

			// return '<span class="' . esc_attr($a['href']) . '">' . $content . '</span>';
			return '<a class="ui-button ui-button-o" href="' . $href . '"><span class="ui-button-overlay"></span><span class="ui-button-text">' . $content . '</span></a>';

		//  return ob_get_clean();
	}

	add_shortcode( 'button', 'ui_button_shortcode' );

// Icono scroll

	function ui_icon_scroll( $atts ) {

			return '<div class="ui-icon-scroll"></div>';

	}

	add_shortcode( 'scroll', 'ui_icon_scroll' );


// Add action page style

	function page_styles() {

		 global $post;

		$code = wk_codediv_get_meta( 'wk_codediv_cdigo' );

		if( is_home() ) :

			if( $code ) :

				?>

				<style id="<?php echo $post->post_name; ?>-style">
				<?php echo $code; ?>
				</style>

				<?php

			endif;

		endif;

	}

	add_action( 'page_styles', 'page_styles' );

// Add action posts links

function post_links() {


	?>

		<?php if( is_user_logged_in() ) : ?>

			<div class="post-links"><?php edit_post_link('<i class="fa fa-pencil"></i>'); ?><a href="<?php the_permalink(); ?>"><span class="fa fa-external-link"></span></a></div>

		<?php endif; ?>

	<?php


}

add_action( 'post_links', 'post_links' );
