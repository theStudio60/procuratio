<?php
/**
 * Template Name: contact-page
 *
 * @package studio_soixante
 */

get_header(); 
?>

<?php  get_template_part( 'partials/sections/layout','contact' ); ?>

<?php if( have_rows('group_flex-content') ): ?>
  <?php while( have_rows('group_flex-content') ): the_row(); ?>
    <?php if( have_rows('flex-content') ): ?>
      <?php while( have_rows('flex-content') ): the_row(); ?>
        <?php get_template_part( 'partials/flex/layout','default' ); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?> 
<?php get_footer(); 