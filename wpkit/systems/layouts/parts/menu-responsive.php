<?php 
/**
*
*  Menú responsivo, usa OKnav.js
*
* @package WPKit
* @author ALUMIN
* @copyright Copyright (C) Alumin.Agency
* @version WPKIT 3.0
*/

    global $is_IE; 

    if( ! $is_IE and get_option( 'wk_option_library_oknav' ) ) : 

        $classes[] = 'iexplorer'; if(preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $browser_version)) $classes[] = 'iexplorer'.$browser_version[1]; ?>
        
       <section id="header-container" class="wk-section">
            <div class="wk-section-wrap">
                <header id="header-okaynav" class="okayNav-headers">
                        <a style="height: 100%;" id="logo" class="okayNav-header__logo" href="<?php bloginfo( 'url' ); ?>">
                            <?php if ( get_option('wk_custom_logo_main') ) : ?>
                               <img width="140" src="<?php echo get_option( 'wk_custom_logo_main' ); ?>">
                            <?php else : ?>
                                <img width="140" src="<?php echo get_template_directory_uri(); ?>/wpkit/admin/img/wpkit-logo.svg">
                           <?php endif; ?>
                        </a>
                        <?php get_template_part('wpkit/systems/layouts/parts/menu-main'); ?> 
                </header>                
            </div>
        </section> 

    <?php else : ?>
       
        <section id="header-container" class="wk-section">
            <div class="wk-section-wrap">
                <header id="header" class="wk-cols">
                    <a style="height: 100%;" id="logo" class="wk-col-2" href="<?php bloginfo( 'url' ); ?>">
                        <?php if ( get_option('wk_custom_logo_main') ) : ?>
                           <img width="140" src="<?php echo get_option( 'wk_custom_logo_main' ); ?>">
                        <?php else : ?>
                            <img width="140" src="<?php echo get_template_directory_uri(); ?>/wpkit/admin/img/wpkit-logo.svg">
                       <?php endif; ?>
                    </a>
                    <div class="wk-d wk-col-6">
                        <?php get_template_part('wpkit/systems/layouts/parts/menu-main'); ?>                             
                    </div>
                    <div class="wk-m"><span id="off-canvas-icon" class="fa fa-bars"></span></div>
                </header>                
            </div>
        </section> 

    <?php endif; ?>

    <?php get_template_part( 'wpkit/systems/layouts/parts/menu-mobile' ); ?>
    