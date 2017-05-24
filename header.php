	<!DOCTYPE html>

	<html lang="<?php bloginfo('language'); ?>" dir="<?php bloginfo('text_direction'); ?>" <?php wk_schema_global_type(); ?> class="">

		<head <?php wk_opengraph_header(); ?>>

			<?php wp_head(); ?>

			<?php // Eso es todo Puedes añadir tags a la cabecera desde aquí ?>

			<link rel="stylesheet" type="text/css" href="http://localhost/wpkitui/css/wpkitui.css">
				
		</head>

		<body <?php body_class('wk-wrap-1200'); ?>>

			<div id="wrapper">
				
				<?php 

				/*
				* Layout de widgets
				*
				* Imprime el layout de widgets en la cabezera. 
				*
				* Si no ocupas el layout de widgets, desactivalo desde el administrador
				* en WPKit / Layouts en lugar de borrar esta función, Si desactivas la opción
				* desde el administrador se seguirá imprimiendo el menú responsivo.
				*/

				do_action( 'wk_widgets_header_layout' ); ?>


				

			








