<?php
/**
 * Template Name: about-page
 *
 * @package studio_soixante
 */
get_header();
if( have_rows('page-about_acf_group') ): 
  while( have_rows('page-about_acf_group') ): the_row(); 
    get_template_part( 'partials/sections/hero', 'page' );
    // get_template_part( 'partials/sections/layout','healthcare' );
    // get_template_part( 'partials/sections/layout','formation' );
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
<?php get_template_part( 'partials/sections/layout','calltoaction' );
get_footer();