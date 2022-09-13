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
.div-white p {color:white!important;}

.div-centered p {text-align:center!important;}
.div-left p {text-align:left!important;}

.div-centered p a {border-bottom: 4px solid #29FFFF!important;text-decoration:none!important}
.div-centered p a span{border-bottom: 4px solid #29FFFF!important;} 
.div-left p a {border-bottom: 4px solid #29FFFF!important;text-decoration:none!important}
.div-left p a span{border-bottom: 4px solid #29FFFF!important;} 
      body.page-wrapper{background-color:#002369!important;}
    </style>
<?php

    get_template_part( 'partials/sections/hero','home' );
if( have_rows('acf_group_homepage') ):
  while( have_rows('acf_group_homepage') ): the_row();
    get_template_part( 'partials/sections/layout','presentation' );
    //get_template_part( 'partials/sections/layout','fiduciaire' );
    //get_template_part( 'partials/sections/layout','fiduciaire' );
    //get_template_part( 'partials/sections/layout','partners' );
    get_template_part( 'partials/sections/layout','columns' );
    get_template_part( 'partials/sections/layout','conseil' );
    get_template_part( 'partials/sections/layout','control' );
    // get_template_part( 'partials/sections/layout','services' );

    // get_template_part( 'partials/sections/layout','values' );
    get_template_part( 'partials/sections/layout','values-columns' );
    get_template_part( 'partials/sections/layout','contact' );
  endwhile;
endif;
?>
<?php
get_footer();
?>
