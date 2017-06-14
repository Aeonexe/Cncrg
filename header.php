	<!DOCTYPE html>

	<html lang="<?php bloginfo('language'); ?>" dir="<?php bloginfo('text_direction'); ?>" <?php wk_schema_global_type(); ?> class="">

		<head <?php wk_opengraph_header(); ?>>

			<?php $base_url = get_template_directory_uri(); ?>

			<?php wp_head(); ?>

			<?php // Eso es todo Puedes añadir tags a la cabecera desde aquí ?>


			<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.1.1.min.js"></script>
			<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.css">
			<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.js"></script>
			<link type="text/css" rel="stylesheet" media="screen,projection" href="<?php echo get_template_directory_uri(); ?>/css/wpkitui-addon.css">
			<link type="text/css" rel="stylesheet" media="screen,projection" href="<?php echo get_template_directory_uri(); ?>/css/ui-concierge.css">
			<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/onepage-scroll/onepage-scroll.css">
			<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/onepage-scroll/jquery.onepage-scroll.js"></script>
			<style>

                        #wrapper {
                        height: 100% !important;
                        height: 100%;
                        margin: 0 auto;
                        overflow: hidden;
                        }


                        }
                        .main section .page_container {
                        position: relative;
                        top: 25%;
                        margin: 0 auto 0;
                        max-width: 950px;
                        z-index: 3;
                        }
                        .main section  {
                        overflow: hidden;
                        }

                  </style>
                  <script>
                  	  $(document).ready(function(){
                              $(".main").onepage_scroll({
                                sectionContainer: "section",
                                responsiveFallback: 600,
                                loop: true
                              });
            		});
            	</script> -->



		</head>

		<body <?php body_class('wk-wrap-1800'); ?>>

			<div id="wrapper">

				<header id="main-header" class="wk-section site-section">

					<div class="wk-section-wrap">

						<?php get_template_part( 'parts/svg-logo' ); ?>

					</div>

				</header>

				<nav id="main-nav" class="wk-d">

					<div id="nav-contact">
<!-- 						<span id="nav-call"  class="nav-item">Contrata ahora</span> -->
						<a id="nav-call" class="ui-button ui-button-o" href="#page-contacto"><span class="ui-button-overlay"></span><span class="ui-button-text">Contrata ahora</span></a>
						<a id="nav-phone" class="nav-item nav-icon ui-bg-aqua" href="tel:<?php the_field( 'site_info_telefono', 'option' ); ?>"><img width="18" src="<?php echo get_template_directory_uri(); ?>/img/icon-phone-alt.svg"></a>
						<a id="nav-mail"  class="nav-item nav-icon ui-bg-green" href="mailto:<?php the_field( 'site_info_email', 'option' ); ?>?subject=Información"><img width="18" src="<?php echo get_template_directory_uri(); ?>/img/icon-mail-alt.svg"></a>
					</div>

					<div id="nav-menu">

						<?php	$wp_query = new WP_Query( 'post_type=page&order=ASC' ); global $post; ?>

						<?php if( $wp_query->have_posts() ) : $i = 0; ?>

							<ul class="menu">

								<?php while( $wp_query->have_posts() ) : $i++; $wp_query->the_post(); ?>

									<?php if( get_field( 'site_menu_show_page' ) ) : ?>

										<li class="menu-item <?php if( $i == 1 ) : echo 'active'; endif; ?>">

											<a href="#page-<?php echo $post->post_name; ?>"><?php the_title(); ?></a>

										</li>

									<?php endif; ?>

								<?php endwhile;  ?>

							</ul>

						<?php endif; wp_reset_query(); ?>

					</div>

					<ul class="menu onepage-pagination"></ul>


				</nav>

				<main class="main">
