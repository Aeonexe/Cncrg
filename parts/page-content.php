      <?php global $post; ?>


      <?php if( $post->post_name == 'home' ) : ?>

            <section data-page="<?php echo $post->post_name; ?>" id="page-<?php echo $post->post_name; ?>" class="section page site-page site-page-generic wk-section" style="<?php if( get_field( 'site_bg_img' ) ) : ?>background-image: linear-gradient(0deg, rgba(0,0,0,0.8), rgba(0,0,0,0)), url(<?php the_field( 'site_bg_img' ); ?>);<?php endif ?> <?php if( get_field( 'site_bg_color' ) ) : ?>background-color: <?php the_field( 'site_bg_color' ); ?>;<?php endif ?>">

                  <?php do_action( 'page_styles' ); ?>

                  <div class="wk-section-wrap">

                        <article>

                              <?php the_content(); ?>

                        </article>

                  </div>

                  <?php do_action( 'post_links' ); ?>

            </section>

      <?php elseif( $post->post_name == 'que-es-concierge' ) : ?>

            <section data-page="<?php echo $post->post_name; ?>" id="page-<?php echo $post->post_name; ?>" class="section page site-page wk-section" style="<?php if( get_field( 'site_bg_img' ) ) : ?>background-image: url(<?php the_field( 'site_bg_img' ); ?>);<?php endif ?> <?php if( get_field( 'site_bg_color' ) ) : ?>background-color: <?php the_field( 'site_bg_color' ); ?>;<?php endif ?>">

                  <?php do_action( 'page_styles' ); ?>

                  <div class="wk-section-wrap">

                        <article>

                              <?php the_content(); ?>

                              <a class="ui-title-stilized small" href="#">¿Cómo lo hacemos?</a>

                              <a href="#video-01" class="ui-icon ui-icon-play wk-margin-right-24 fancybox-thumb"></a>

                              <div id="video-01" style="display: none;" class="video-container">

                                  <iframe width="1000" height="563" src="https://www.youtube.com/embed/ZnmK_9k0XzI" frameborder="0" allowfullscreen></iframe>

                                </div>

                              <a class="ui-title-stilized small" href="<?php bloginfo( 'url' ); ?>/#page-contacto">Un ángel guardian te espera</a>

                        </article>

                  </div>

                  <?php do_action( 'post_links' ); ?>

            </section>

      <?php elseif( $post->post_name == 'estadisticas' ) : ?>


            <section data-page="<?php echo $post->post_name; ?>" id="page-<?php echo $post->post_name; ?>" class="section page site-page wk-section" style="<?php if( get_field( 'site_bg_img' ) ) : ?>background-image: url(<?php the_field( 'site_bg_img' ); ?>);<?php endif ?> <?php if( get_field( 'site_bg_color' ) ) : ?>background-color: <?php the_field( 'site_bg_color' ); ?>;<?php endif ?>">

                  <?php do_action( 'page_styles' ); ?>

                  <div class="wk-section-wrap">

                        <div class="site-block-container wk-cols">

                              <?php if( have_rows( 'site_estadisticas_bloques' ) ) : while( have_rows( 'site_estadisticas_bloques' ) ) : the_row(); ?>

                                    <div class="site-block wk-col">

                                          <div class="site-block-content">

                                                <div><span class="ui-text-aqua"><?php the_sub_field( 'site_estadisticas_bloques_titulo' ); ?></span><br><?php the_sub_field( 'site_estadisticas_bloques_content' ); ?></div>

                                                <hr class="ui-divider">

                                                <div class="wk-text-uppercase"><?php the_sub_field( 'site_estadisticas_bloques_fuente' ); ?></div>

                                          </div>

                                    </div>

                              <?php endwhile; endif; ?>

                        </div>

                        <article class="wk-text-center" style="width: 100%; max-width: 800px; margin: auto;">

                              <?php the_content(); ?>

                        </article>

                  </div>

                  <?php do_action( 'post_links' ); ?>

            </section>

      <?php elseif( $post->post_name == 'servicios' ) : ?>

            <section data-page="<?php echo $post->post_name; ?>" id="page-<?php echo $post->post_name; ?>" class="section page site-page wk-section" style="<?php if( get_field( 'site_bg_img' ) ) : ?>background-image: url(<?php the_field( 'site_bg_img' ); ?>);<?php endif ?> <?php if( get_field( 'site_bg_color' ) ) : ?>background-color: <?php the_field( 'site_bg_color' ); ?>;<?php endif ?>">

                  <?php do_action( 'page_styles' ); ?>

                  <div class="wk-section-wrap">

                        <article id="servicios-page-content" class="site-page-content">

                              <?php the_content(); ?>

                        </article>

                        <div class="site-servicios">

                              <?php if( have_rows( 'site_servicios' ) ) : while( have_rows( 'site_servicios' ) ) : the_row(); ?>

                                    <div class="site-servicio">

                                          <div class="site-servicio-img-container" style="background-image: url(<?php the_sub_field( 'site_servicio_img' ); ?>);"></div>
                                          <div class="site-servicio-title-container">
                                                <h1 class="site-servicio-title"><?php the_sub_field( 'site_servicio' ); ?></h1>

                                                <p class="site-servicio-description"><span class="ui-divider"></span><?php the_sub_field( 'site_servicio_description' ); ?></p>
                                          </div>

                                    </div>

                              <?php endwhile; endif; ?>

                        </div>

                  </div>

                  <?php do_action( 'post_links' ); ?>

            </section>

      <?php elseif( $post->post_name == 'quieres-contratar-el-servicio' ) : ?>

            <section data-page="<?php echo $post->post_name; ?>" id="page-<?php echo $post->post_name; ?>" class="section page site-page site-page-generic wk-section" style="<?php if( get_field( 'site_bg_img' ) ) : ?>background-image: url(<?php the_field( 'site_bg_img' ); ?>);<?php endif ?> <?php if( get_field( 'site_bg_color' ) ) : ?>background-color: <?php the_field( 'site_bg_color' ); ?>;<?php endif ?>">

                  <?php do_action( 'page_styles' ); ?>

                  <div class="wk-section-wrap">

                        <article>

                              <?php the_content(); ?>

                        </article>

                  </div>

                  <?php do_action( 'post_links' ); ?>

            </section>

      <?php elseif( $post->post_name == 'certificados' ) : ?>

            <section data-page="<?php echo $post->post_name; ?>" id="page-<?php echo $post->post_name; ?>" class="section page site-page wk-section" style="<?php if( get_field( 'site_bg_img' ) ) : ?>background-image: url(<?php the_field( 'site_bg_img' ); ?>);<?php endif ?> <?php if( get_field( 'site_bg_color' ) ) : ?>background-color: <?php the_field( 'site_bg_color' ); ?>;<?php endif ?>">

                  <?php do_action( 'page_styles' ); ?>

                  <div class="wk-section-wrap">

                        <h3 class="ui-title-stilized ui-text-green"><?php the_title(); ?></h3>

                        <div class="slider">
                              <?php $images = get_field( 'site_certificados' ); ?>
                              <?php foreach( $images as $image ) : ?>
                                    <div><img class="site-certificado" src="<?php echo $image[sizes][large]; ?>"></div>
                              <?php endforeach; ?>
                        </div>

                  </div>

                  <?php do_action( 'post_links' ); ?>

            </section>

      <?php elseif( $post->post_name == 'contacto' ) : ?>

            <section data-page="<?php echo $post->post_name; ?>" id="page-<?php echo $post->post_name; ?>" class="section site-page wk-section">

                  <?php do_action( 'page_styles' ); ?>

                  <div class="wk-section-wrap">

                        <div class="wk-cols">

                              <div class="wk-col site-section" style="<?php if( get_field( 'site_bg_img' ) ) : ?>background-image: url(<?php the_field( 'site_bg_img' ); ?>);<?php endif ?>">

                                    <?php the_content(); ?>

                                    <address>
                                          <span class="ui-text-green">Tel.</span><?php the_field( 'site_info_telefono' ); ?>
                                          <br>
                                          <span class="ui-text-green">Email.</span><?php the_field( 'site_info_email', 'option' ); ?>
                                          <br>
                                          <span><?php the_field( 'site_info_horario', 'option' ); ?></span>
                                          <br>
                                          <br>
                                          <span><?php the_field( 'site_info_direccion', 'option' ); ?></span>
                                    </address>

                                    <div class="site-social-links">

                                          <a href="<?php the_field( 'site_info_fb', 'option' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-facebook.svg"></a>
                                          <a href="<?php the_field( 'site_info_tw', 'option' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-twitter.svg"></a>
                                          <a href="<?php the_field( 'site_info_linkedin', 'option' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-linkedin.svg"></a>
                                          <a href="<?php the_field( 'site_info_youtube', 'option' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-youtube.svg"></a>

                                    </div>

                              </div>

                              <div class="wk-col site-section" style="<?php if( get_field( 'site_bg_color' ) ) : ?>background-color: <?php the_field( 'site_bg_color' ); ?>;<?php endif ?>">

                                    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 7, 'title' => false, 'description' => false ) ); ?>

                              </div>

                        </div>

                  </div>

                  <?php do_action( 'post_links' ); ?>

            </section>

      <?php elseif( $post->post_name == 'pacientes' ) : ?>

            <section data-page="<?php echo $post->post_name; ?>" id="page-<?php echo $post->post_name; ?>" class="section page site-page site-page-generic wk-section" style="<?php if( get_field( 'site_bg_img' ) ) : ?>background-image: url(<?php the_field( 'site_bg_img' ); ?>);<?php endif ?> <?php if( get_field( 'site_bg_color' ) ) : ?>background-color: <?php the_field( 'site_bg_color' ); ?>;<?php endif ?>">

                  <?php do_action( 'page_styles' ); ?>

                  <div class="wk-section-wrap">

                        <article>

                              <div class="slider-testimonial">

                                    <?php $wp_inner_query = new WP_Query( 'post_type=paciente' ); ?>

                                    <?php if( $wp_inner_query->have_posts() ) : $i = 0; while( $wp_inner_query->have_posts() ) : $i++; $wp_inner_query->the_post(); ?>

                                          <div>
                                                <section class="slide-video">
                                                      <?php the_field( 'site_testimonial_option_video_link' ); ?>
                                                      <h6 class="slide-title-container"><?php the_title(); ?></h6>
                                                </section>
                                          </div>

                              	<?php endwhile; wp_reset_postdata(); endif; ?>

                              </div>

                              <p class="wk-text-center wk-padding-y-48">Pacientes</p>

                              <?php the_content(); ?>

                        </article>

                  </div>

                  <?php do_action( 'post_links' ); ?>

            </section>

      <?php else : ?>

            <section data-page="<?php echo $post->post_name; ?>" id="page-<?php echo $post->post_name; ?>" class="section page site-page site-page-generic wk-section" style="<?php if( get_field( 'site_bg_img' ) ) : ?>background-image: url(<?php the_field( 'site_bg_img' ); ?>);<?php endif ?> <?php if( get_field( 'site_bg_color' ) ) : ?>background-color: <?php the_field( 'site_bg_color' ); ?>;<?php endif ?>">

                  <?php do_action( 'page_styles' ); ?>

                  <div class="wk-section-wrap">

                        <article>

                              <?php the_content(); ?>

                        </article>

                  </div>

                  <?php do_action( 'post_links' ); ?>

            </section>

      <?php endif; ?>
