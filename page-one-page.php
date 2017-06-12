<!DOCTYPE HTML>

      <html>

            <head>
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.1.1.min.js"></script>
			<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.css">
			<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.js"></script>
			<link type="text/css" rel="stylesheet" media="screen,projection" href="<?php echo get_template_directory_uri(); ?>/css/wpkitui-addon.css">
			<link type="text/css" rel="stylesheet" media="screen,projection" href="<?php echo get_template_directory_uri(); ?>/css/ui-concierge.css">
                  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/onepage-scroll/jquery.onepage-scroll.js"></script>
			<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/onepage-scroll/onepage-scroll.css">

                  <style>

                        .wrapper {
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
            	</script>
            </head>

            <body>
            	<div class="wrapper">
            		<ul class="menu onepage-pagination"></ul>

            		<main class="main">

            			<section id="page-1" class="page1" title="Inicio">
            				<div class="page_container">
            					<h1>Uno Page Scroll</h1>
            				</div>
            			</section>

            			<section id="page-2" class="page2" title="Página 2">
            				<div class="page_container">
            					<h1>Dos Page Scroll</h1>
            				</div>
            			</section>

            			<section id="page-3" class="page3" title="Página 3">
            				<div class="page_container">
            					<h1>Tres Page Scroll</h1>
            				</div>
            			</section>

            		</main>
            	</div>
            </body>


      </html>
