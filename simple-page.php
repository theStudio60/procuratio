<?php
/**
 * Template Name: simple-page
 *
 * @package studio_soixante
 */
get_header(); 
if( have_rows('simplepage_acf_group') ): 
  while( have_rows('simplepage_acf_group') ): the_row();  
    $content = get_sub_field('wysiwyg');
 ?>
    <section class="section mt-5" style="min-height:80vh"> 
      <div class=" section__container">
        <div class="section__row">
          <div class="section__col mt-5">
            <?= $content ?>
          </div>
        </div>
      </div>
    </section>
<?php
  endwhile;
endif;
get_footer();