			<?php 

				/*
				* Layout de widgets
				*
				* Imprime el layout de widgets en el footer. 
				*
				* Si no ocupas el layout de widgets, desactivalo desde el administrador
				* en WPKit / Layouts en lugar de borrar esta función, Si desactivas la opción
				* desde el administrador se seguirá imprimiendo el menú responsivo.
				*/

				do_action( 'wk_widgets_footer_layout' ); ?>

		</div><!--wrapper-->
			
	</body>
	
	<!--Script-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
		
	<?php wp_footer(); ?>

</html>
