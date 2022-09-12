<?php
/**
 * Template Name: front-page
 *
 * @package studio_soixante
 */
get_header();
?>
<style>
  /*
	body.page-wrapper{
		background-color:#002369!important;
	}

	#slick-slide {
		margin-right: 50px;
	}
//*/
</style>
<?php

    get_template_part( 'partials/sections/hero','home' );
if( have_rows('acf_group_homepage') ):
  while( have_rows('acf_group_homepage') ): the_row();
    get_template_part( 'partials/sections/layout','presentation' );
    get_template_part( 'partials/sections/layout','fiduciaire' );
    get_template_part( 'partials/sections/layout','partners' );
    get_template_part( 'partials/sections/layout','control' );
    get_template_part( 'partials/sections/layout','services' );

    get_template_part( 'partials/sections/layout','values' );
    get_template_part( 'partials/sections/layout','values-columns' );
    get_template_part( 'partials/sections/layout','contact' );
  endwhile;
endif;
?>
<?php
get_footer();
?>
