<?php
/**
 * Template Name: front-page
 *
 * @package studio_soixante
 */
get_header();

if( have_rows('website_settings', 'option') ): 
  while( have_rows('website_settings', 'option') ): the_row();
    if( have_rows('popup_alert') ):
      while( have_rows('popup_alert') ): the_row();


      if ( 'Oui' == get_sub_field('alert_condition') ):
         
        get_template_part('partials/elements/popup');
?> 
       
          <?php
        endif; 
      endwhile; 
    endif; 
  endwhile; 
endif; 

if( have_rows('acf_group_homepage') ): 
  while( have_rows('acf_group_homepage') ): the_row(); 
    get_template_part( 'partials/sections/hero', 'home' );
    get_template_part( 'partials/sections/layout','about' );
    get_template_part( 'partials/sections/layout','healthcare' );
    get_template_part( 'partials/sections/layout','formations' );
  endwhile;
endif;
?>
<?php if( have_rows('group_flex-content') ): ?>
  <?php while( have_rows('group_flex-content') ): the_row(); ?>
    <?php if( have_rows('flex-content') ): ?>
      <?php while( have_rows('flex-content') ): the_row(); ?>
        <?php get_template_part( 'partials/flex/layout','default' ); ?>
        <?php get_template_part( 'partials/flex/layout','center' ); ?>
        <?php get_template_part( 'partials/flex/layout','halfhalf' ); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
<?php
get_template_part( 'partials/sections/layout','calltoaction' );

get_footer();
