<?php
/**
 * Template Name: front-page
 *
 * @package studio_soixante
 */
get_header();

//if( have_rows('website_settings', 'option') ): 
//  while( have_rows('website_settings', 'option') ): the_row();
//    if( have_rows('popup_alert') ):
//      while( have_rows('popup_alert') ): the_row();
//
//
//      if ( 'Oui' == get_sub_field('alert_condition') ):
//         
//        get_template_part('partials/elements/popup');
//        endif; 
//      endwhile; 
//    endif; 
//  endwhile; 
//endif; 
?>     
          <?php

if( have_rows('acf_group_homepage') ): 
  while( have_rows('acf_group_homepage') ): the_row(); 
    get_template_part( 'partials/sections/hero', 'home' );
    get_template_part( 'partials/sections/layout', 'presentation' );
    get_template_part( 'partials/sections/layout', 'fiduciaire' );
    get_template_part( 'partials/sections/layout','partners' );
    get_template_part( 'partials/sections/layout','control' );
    get_template_part( 'partials/sections/layout','services' );
    get_template_part( 'partials/sections/layout','values' );
    get_template_part( 'partials/sections/layout','contact' );

  endwhile;
endif;
?>

<?php
get_footer();
?>