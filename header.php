<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package studio_soixante
 */
 // $parent_title = get_the_title($post->post_parent);

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> style="scroll-behavior: smooth;">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head(); ?> 
</head> 
<?php get_template_part('partials/preloader/preloader','style'); ?>
<?php get_template_part('partials/preloader/preloader','script'); ?>
<body class="page-wrapper">
  <?php wp_body_open(); ?>
  <?php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  //$logotype_d = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  $logotype_d = THEME_URI . "/images/logo-procuratio-black.png"; 
  $logotype_w = THEME_URI . "/images/logo-procuratio-white.png"; 
  $logotype_b = THEME_URI . "/images/logo-procuratio-blue.png"; 
  $logotype = $logotype_b; 
  $logotypeMobile = $logotype_b;
  $bg_color="";
  $bg_color_mobile="";
  $position="";
  ?>
  

  <header id="masthead" class="header px-0 py-3 m-0 border- ">
 
    <div class="container-fluid   d-flex py-2">
        <a class="ml-2 my-auto " href="<?= get_home_url() ?>">
          <div class=" mx-auto">
            <img width="auto" height="64px" class="mx-auto"  src="<?= $logotype_w ?>" alt="<?= get_bloginfo() ?>">
          </div>
        </a>
        <?php
          wp_nav_menu( array(
          'theme_location'  => 'header-menu',
          'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'div',
          'container_class' => 'm-auto',
          'container_id'    => ' ',
          'menu_class'      => 'm-0 p-0',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
          ));
 
          ?>  
      
          <div class="my-auto ml-auto mr-0 d-flex">
              <?php /*
              <a href="#" class="nav-link ml-1 text-white">IT</a>
              <a href="#" class="nav-link ml-1 text-white">EN</a>
              <a href="#" class="nav-link ml-1 text-white">FR</a>
              //*/ ?>
              <?php languages_list_navbar();?>
          </div> 
          <?php /*
          <button onclick= "" class="button">Call to action</button>
          //*/ ?>
    </div>

  </header>
   
  
  <header id="masthead" class="header-mobile border-bottom" >
    <div class="header-mobile__container"> 
      <div class="header-mobile__row ">
	      <?php /*
        <div class="header-mobile__language">
          <a href="#" class="nav-link">DE</a>
          <a href="#" class="nav-link">EN</a>
          <a href="#" class="nav-link">FR</a>
        </div> 
	      //*/ ?>


	      
        <div class="header-mobile__brand mr-auto ml-auto ">
          <a href="<?= get_home_url() ?>" onclick="closeMenu()" >
            <div class=" header-mobile__brand__logo">
              <img style="height:auto;width:160px" src="<?= $logotype_w ?>" alt="<?= get_bloginfo() ?>">
            </div>
          </a>
        </div>
        <div class="d-flex p-0 ml-auto">
          <?php // get_template_part('partials/nav/cta','headerMobile')?>
          <?php //<span class="p-1"></span> ?>
          <div onclick="openMenu()" title="toggle menu" id="burger" class="header-mobile__burger  header-mobile__burger--visible"  aria-expanded="false">
            <?php if ( is_front_page() ):?>
              <?php get_template_part('partials/nav/burger','light'); ?>
            <?php  endif?>
          </div>

          <div onclick="closeMenu()" title="close menu" id="close" class="header-mobile__burger  header-mobile__burger--hidden"  aria-expanded="false"> 
            <?php if ( is_front_page() ):?>
              <?php get_template_part('partials/nav/close','light'); ?>
            <?php  endif?>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="mx-0 p-2  border w-100 d-flex " style="margin-top:96px;">
          <?php languages_list_navbar_mobile();?>

    </div>
  <div id="overlayMenu" class="mobile-menu mobile-menu--hidden " style=" ">

    <div class="mobile-menu__menu">        

      <?php wp_nav_menu( array(
      'theme_location'  => 'header-menu',
      'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
      'container'       => ' ',
      'container_class' => ' ',
      'container_id'    => 'navMenu',
      'menu_class'      => 'm-auto p-0',
      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
      'walker'          => new WP_Bootstrap_Navwalker(),
      ));
      ?> 

    </div>

  </div>
  <script>
/*
    $('.dropdown').mouseenter(function(){ $(this).find('.dropdown-menu').show();}) 
    $('.dropdown').mouseleave(function(){ 
      $(this).find('.dropdown-menu').hide();
    }) ; 
//*/
  </script>
        <?php // get_template_part('partials/elements/popup') ?>


  <?php get_template_part('partials/nav/btn','scollToTop')?>
<?php 
