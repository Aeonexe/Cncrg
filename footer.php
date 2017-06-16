			</main>

			<footer id="main-footer">

				<div class="wk-cols">

					<div class="wk-col-2">

						<?php if( get_option('wk_custom_logo_alt') ) : ?>

							<a href="<?php if( get_field( 'site_info_footer_url', 'option' ) ) : the_field( 'site_info_footer_url', 'option' ); else : bloginfo( 'url' ); endif; ?>"><img width="170" alt="<?php bloginfo('name'); ?>" src="<?php echo get_option('wk_custom_logo_alt'); ?>"></a>

						<?php else : ?>

							<a href="#"><?php bloginfo('name'); ?></a>

						<?php endif; ?>
					</div>

					<div class="wk-col-10 wk-text-right wk-flex wk-flex-align-center wk-flex-justify-end">

						<?php wp_nav_menu( 'theme_location=footer-menu' ); ?>

					</div>

				</div>

			</footer>

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
